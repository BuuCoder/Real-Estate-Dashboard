<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\Amenity;
use App\Models\Image;
use Illuminate\Support\Str;

class ListingSeeder extends Seeder
{
    public function run()
    {
        // First, create some basic amenities if they don't exist
        $amenities = [
            ['code' => 'elevator', 'name' => 'Thang máy', 'group_name' => 'Tiện ích chung'],
            ['code' => 'parking', 'name' => 'Chỗ đậu xe', 'group_name' => 'Tiện ích chung'],
            ['code' => 'security', 'name' => 'Bảo vệ 24/7', 'group_name' => 'An ninh'],
            ['code' => 'gym', 'name' => 'Phòng tập gym', 'group_name' => 'Thể thao'],
            ['code' => 'swimming_pool', 'name' => 'Hồ bơi', 'group_name' => 'Thể thao'],
            ['code' => 'playground', 'name' => 'Khu vui chơi trẻ em', 'group_name' => 'Giải trí'],
            ['code' => 'garden', 'name' => 'Khu vườn cảnh quan', 'group_name' => 'Môi trường'],
            ['code' => 'shopping_center', 'name' => 'Trung tâm thương mại', 'group_name' => 'Tiện ích'],
            ['code' => 'balcony', 'name' => 'Ban công', 'group_name' => 'Nội thất'],
            ['code' => 'air_conditioning', 'name' => 'Điều hòa', 'group_name' => 'Nội thất'],
        ];

        foreach ($amenities as $amenityData) {
            Amenity::firstOrCreate(
                ['code' => $amenityData['code']], 
                $amenityData
            );
        }

        // Create or update the third listing - Đất nghỉ dưỡng Hồ Sông Ray
        $listing3 = Listing::updateOrCreate(
            ['slug' => Str::slug('Ban 6916m2 view Ho Song Ray khu nghi duong tai Xa Lam San Cam My Dong Nai')],
            [
                'title' => 'Bán 6.916m2 view Hồ Sông Ray, khu nghỉ dưỡng tại Xã Lâm San, Cẩm Mỹ, Đồng Nai',
                'slug' => Str::slug('Ban 6916m2 view Ho Song Ray khu nghi duong tai Xa Lam San Cam My Dong Nai'),
                'user_id' => 1,
                'property_type_id' => 1, // Đất nền
                'land_use_type_id' => 2, // CLN - Đất canh tác lâu năm
                'legal_status_id' => 1, // Sổ đỏ
                'province_id' => null,
                'district_id' => null,
                'ward_id' => null,
                'street' => 'Hồ Sông Ray',
                'address' => 'Xã Lâm San, Cẩm Mỹ, Đồng Nai',
                'lat' => 10.8833,
                'lng' => 107.2500,
                'area_land' => 6916.00,
                'width' => 58.0, // Mặt tiền
                'length' => 119.24, // Tính từ diện tích
                'road_width' => 3.5, // Đường vào
                'frontage' => true, // Mặt tiền rộng
                'description' => '<div class="px-6 py-4">
    <h2 class="text-2xl font-semibold mb-4">Bán 6.916m² view Hồ Sông Ray - Khu nghỉ dưỡng tại Xã Lâm San, Cẩm Mỹ, Đồng Nai</h2>
    
    <p class="text-lg mb-4">Nhanh tay sở hữu farm, khu nghỉ dưỡng tuyệt vời này tại Xã Lâm San, Cẩm Mỹ, Đồng Nai.</p>
    
    <ul class="list-none pl-0 space-y-2">
        <li class="text-lg">- Diện tích rộng lớn 6916m² CLN, thích hợp cho các hoạt động nghỉ dưỡng và đầu tư.</li>
        <li class="text-lg">- Giá bán hấp dẫn chỉ 9,7 tỷ VND.</li>
        <li class="text-lg">- Mặt tiền rộng 58m, thuận lợi cho việc kinh doanh hoặc phát triển dự án.</li>
        <li class="text-lg">- Tiếp giáp Hồ Sông Ray 82m.</li>
        <li class="text-lg">- Ngõ vào rộng 3,5m, dễ dàng cho xe ô tô ra vào.</li>
        <li class="text-lg">- Pháp lý đầy đủ, đảm bảo an toàn cho giao dịch.</li>
        <li class="text-lg">- Phong thủy tốt, mang lại tài lộc cho chủ sở hữu.</li>
        <li class="text-lg">- Đất đang để trống, đất thịt màu mỡ.</li>
    </ul>

    <p class="text-lg mt-6">Liên hệ ngay để biết thêm thông tin chi tiết qua số điện thoại <strong>097 432 6036</strong> và gặp <strong>Nguyễn Tấn Phát</strong>.</p>
</div>',
                'area_built' => null,
                'bedrooms' => null,
                'bathrooms' => null,
                'floors' => null,
                'direction' => null,
                'price_total' => 9700000000.00, // 9,7 tỷ VND
                'currency' => 'VND',
                'status' => 'published',
                'published_at' => now(),
                'expired_at' => now()->addMonths(3),
            ]
        );

        // Add images for the third listing
        $listing3->images()->delete();
        
        $imageUrls3 = [
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765451372/20251210110506-524a_wm_smzskr.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765451372/20251210110517-9861_wm_cgkhsd.jpg',
        ];

        foreach ($imageUrls3 as $index => $url) {
            Image::create([
                'listing_id' => $listing3->id,
                'url' => $url,
                'is_cover' => $index === 0,
                'sort_order' => $index + 1,
            ]);
        }

        // Sync amenities to the third listing (land/farm amenities)
        $landAmenityIds = Amenity::whereIn('code', [
            'garden',
        ])->pluck('id')->toArray();

        $listing3->amenities()->sync($landAmenityIds);

        $this->command->info('All listings created successfully with images and amenities ! Done');
    }
}