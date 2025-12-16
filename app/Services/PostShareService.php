<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Str;

class PostShareService
{
    /**
     * Tạo nội dung để share lên Facebook/Zalo từ bài đăng
     */
    public function generateShareContent(Post $post): array
    {
        $plainContent = $this->htmlToPlainText($post->content);
        $images = $this->extractImages($post);
        
        return [
            'title' => $post->title,
            'summary' => $post->summary,
            'content' => $plainContent,
            'content_short' => Str::limit($plainContent, 500),
            'cover_image' => $post->cover_image_url,
            'images' => $images,
            'url' => $post->canonical_url,
            'hashtags' => $this->generateHashtags($post),
            'share_text' => $this->buildShareText($post, $plainContent),
        ];
    }

    /**
     * Chuyển HTML sang plain text
     */
    private function htmlToPlainText(string $html): string
    {
        // Xóa script và style
        $text = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);
        $text = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $text);
        
        // Thay thế các thẻ block bằng xuống dòng
        $text = preg_replace('/<\/(p|div|h[1-6]|li|tr|br)>/i', "\n", $text);
        $text = preg_replace('/<(br|hr)\s*\/?>/i', "\n", $text);
        
        // Xóa tất cả HTML tags còn lại
        $text = strip_tags($text);
        
        // Decode HTML entities
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        
        // Chuẩn hóa khoảng trắng
        $text = preg_replace('/[ \t]+/', ' ', $text);
        $text = preg_replace('/\n\s*\n/', "\n\n", $text);
        $text = trim($text);
        
        return $text;
    }

    /**
     * Trích xuất tất cả URL ảnh từ content
     */
    private function extractImages(Post $post): array
    {
        $images = [];
        
        // Thêm cover image
        if ($post->cover_image_url) {
            $images[] = [
                'url' => $post->cover_image_url,
                'caption' => 'Ảnh bìa',
            ];
        }
        
        // Trích xuất ảnh từ content HTML
        preg_match_all('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $post->content, $matches);
        
        if (!empty($matches[1])) {
            foreach ($matches[1] as $index => $url) {
                // Tìm caption từ figcaption hoặc alt
                $caption = $this->extractImageCaption($post->content, $url, $index);
                
                // Tránh duplicate với cover
                if ($url !== $post->cover_image_url) {
                    $images[] = [
                        'url' => $url,
                        'caption' => $caption,
                    ];
                }
            }
        }
        
        return $images;
    }

    /**
     * Trích xuất caption của ảnh
     */
    private function extractImageCaption(string $html, string $imageUrl, int $index): string
    {
        // Tìm figcaption gần nhất
        $pattern = '/<figure[^>]*>.*?<img[^>]+src=["\']' . preg_quote($imageUrl, '/') . '["\'][^>]*>.*?<figcaption[^>]*>(.*?)<\/figcaption>/is';
        
        if (preg_match($pattern, $html, $match)) {
            return strip_tags($match[1]);
        }
        
        // Tìm alt text
        $altPattern = '/<img[^>]+src=["\']' . preg_quote($imageUrl, '/') . '["\'][^>]+alt=["\']([^"\']+)["\'][^>]*>/i';
        if (preg_match($altPattern, $html, $match)) {
            return $match[1];
        }
        
        return 'Hình ' . ($index + 1);
    }

    /**
     * Tạo hashtags từ tags của bài viết
     */
    private function generateHashtags(Post $post): array
    {
        $hashtags = [];
        
        foreach ($post->tags as $tag) {
            $hashtag = '#' . Str::camel(Str::ascii($tag->name));
            $hashtags[] = $hashtag;
        }
        
        return $hashtags;
    }

    /**
     * Tạo text sẵn sàng để paste vào Facebook/Zalo
     */
    private function buildShareText(Post $post, string $plainContent): string
    {
        $hashtags = $this->generateHashtags($post);
        $hashtagStr = implode(' ', $hashtags);
        
        $shortContent = Str::limit($plainContent, 800);
        
        return <<<TEXT
📰 {$post->title}

{$post->summary}

---
{$shortContent}

🔗 Xem chi tiết: {$post->canonical_url}

{$hashtagStr}
TEXT;
    }
}
