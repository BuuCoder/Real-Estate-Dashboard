<?php

namespace App\Services;

use App\Models\Listing;
use Illuminate\Support\Str;

class ListingShareService
{
    protected array $propertyTypes = [
        1 => 'Nhà phố', 2 => 'Căn hộ chung cư', 3 => 'Đất nền', 4 => 'Biệt thự',
        5 => 'Shophouse', 6 => 'Văn phòng', 7 => 'Nhà liền kề', 8 => 'Kho xưởng', 9 => 'Trang trại/Nhà vườn',
    ];

    protected array $directions = [
        'east' => 'Đông', 'west' => 'Tây', 'south' => 'Nam', 'north' => 'Bắc',
        'northeast' => 'Đông Bắc', 'northwest' => 'Tây Bắc', 'southeast' => 'Đông Nam', 'southwest' => 'Tây Nam',
    ];

    /**
     * Tạo nội dung để share lên Facebook/Zalo từ listing
     */
    public function generateShareContent(Listing $listing): array
    {
        $plainDescription = $this->htmlToPlainText($listing->description ?? '');
        $images = $this->extractImages($listing);
        
        return [
            'title' => $listing->title,
            'description' => $plainDescription,
            'description_short' => Str::limit($plainDescription, 300),
            'cover_image' => $images[0]['url'] ?? null,
            'images' => $images,
            'price' => $this->formatPrice($listing),
            'area' => $this->formatArea($listing),
            'location' => $this->formatLocation($listing),
            'specs' => $this->buildSpecs($listing),
            'hashtags' => $this->generateHashtags($listing),
            'share_text' => $this->buildShareText($listing, $plainDescription),
        ];
    }

    private function htmlToPlainText(string $html): string
    {
        $text = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);
        $text = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $text);
        $text = preg_replace('/<\/(p|div|h[1-6]|li|tr|br)>/i', "\n", $text);
        $text = preg_replace('/<(br|hr)\s*\/?>/i', "\n", $text);
        $text = strip_tags($text);
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/[ \t]+/', ' ', $text);
        $text = preg_replace('/\n\s*\n/', "\n\n", $text);
        return trim($text);
    }

    private function extractImages(Listing $listing): array
    {
        $images = [];
        
        foreach ($listing->images->sortBy('sort_order') as $index => $image) {
            $images[] = [
                'url' => $image->url,
                'caption' => $image->is_cover ? 'Ảnh bìa' : 'Hình ' . ($index + 1),
                'is_cover' => (bool) $image->is_cover,
            ];
        }
        
        return $images;
    }

    private function formatPrice(Listing $listing): string
    {
        if (!$listing->price_total) return 'Liên hệ';
        
        $price = (float) $listing->price_total;
        if ($price >= 1000000000) {
            return number_format($price / 1000000000, 1) . ' tỷ';
        } elseif ($price >= 1000000) {
            return number_format($price / 1000000, 0) . ' triệu';
        }
        return number_format($price, 0, ',', '.') . ' đ';
    }

    private function formatArea(Listing $listing): string
    {
        if ($listing->area_land) {
            return number_format($listing->area_land, 0) . ' m²';
        }
        return 'Chưa cập nhật';
    }

    private function formatLocation(Listing $listing): string
    {
        $parts = [];
        if ($listing->street) $parts[] = $listing->street;
        if ($listing->ward) $parts[] = $listing->ward->full_name ?? $listing->ward->name;
        if ($listing->province) $parts[] = $listing->province->name;
        
        return implode(', ', $parts) ?: ($listing->address ?? 'Chưa cập nhật');
    }

    private function buildSpecs(Listing $listing): array
    {
        $specs = [];
        
        if ($listing->area_land) {
            $specs[] = "📐 Diện tích: " . number_format($listing->area_land, 0) . " m²";
        }
        if ($listing->width && $listing->length) {
            $specs[] = "📏 Kích thước: " . number_format($listing->width, 1) . "m x " . number_format($listing->length, 1) . "m";
        }
        if ($listing->bedrooms) {
            $specs[] = "🛏️ Phòng ngủ: " . $listing->bedrooms;
        }
        if ($listing->bathrooms) {
            $specs[] = "🚿 Phòng tắm: " . $listing->bathrooms;
        }
        if ($listing->floors) {
            $specs[] = "🏢 Số tầng: " . $listing->floors;
        }
        if ($listing->direction && isset($this->directions[$listing->direction])) {
            $specs[] = "🧭 Hướng: " . $this->directions[$listing->direction];
        }
        if ($listing->road_width) {
            $specs[] = "🛣️ Đường trước nhà: " . number_format($listing->road_width, 1) . "m";
        }
        if ($listing->frontage) {
            $specs[] = "✅ Mặt tiền";
        }
        
        return $specs;
    }

    private function generateHashtags(Listing $listing): array
    {
        $hashtags = ['#BatDongSan'];
        
        // Property type
        if ($listing->property_type_id && isset($this->propertyTypes[$listing->property_type_id])) {
            $hashtags[] = '#' . Str::camel(Str::ascii($this->propertyTypes[$listing->property_type_id]));
        }
        
        // Province
        if ($listing->province) {
            $hashtags[] = '#' . Str::camel(Str::ascii($listing->province->name));
        }
        
        return $hashtags;
    }

    private function buildShareText(Listing $listing, string $plainDescription): string
    {
        $propertyType = $this->propertyTypes[$listing->property_type_id] ?? 'Bất động sản';
        $price = $this->formatPrice($listing);
        $area = $this->formatArea($listing);
        $location = $this->formatLocation($listing);
        $specs = $this->buildSpecs($listing);
        $hashtags = $this->generateHashtags($listing);
        
        $specsText = implode("\n", $specs);
        $hashtagStr = implode(' ', $hashtags);
        $shortDesc = Str::limit($plainDescription, 500);

        return <<<TEXT
🏠 {$listing->title}

💰 Giá: {$price}
📍 Vị trí: {$location}

{$specsText}

---
{$shortDesc}

📞 Liên hệ ngay để xem nhà!

{$hashtagStr}
TEXT;
    }
}
