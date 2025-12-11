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
        // Create or update the fourth listing - Nhà mặt tiền Nguyễn Trãi Long Khánh
        $listing4 = Listing::updateOrCreate(
            ['slug' => Str::slug('Ban nha mat tien 20m Nguyen Trai dien tich 1993m2 681m2 tho cu dac dia trung tam Long Khanh')],
            [
                'title' => 'Bán nhà mặt tiền 20m Nguyễn Trãi, diện tích 1993,2m2, 681.9m2 thổ cư đắc địa trung tâm Long Khánh',
                'slug' => Str::slug('Ban nha mat tien 20m Nguyen Trai dien tich 1993m2 681m2 tho cu dac dia trung tam Long Khanh'),
                'user_id' => 1,
                'property_type_id' => 3, // Nhà mặt tiền
                'land_use_type_id' => 1, // Đất ở (thổ cư)
                'legal_status_id' => 1, // Sổ đỏ
                'province_id' => null,
                'district_id' => null,
                'ward_id' => null,
                'street' => 'Đường Nguyễn Trãi',
                'address' => 'Đường Nguyễn Trãi, Phường Xuân Hòa, Long Khánh, Đồng Nai',
                'lat' => 10.919444, // 10°55'10.0"N
                'lng' => 107.249278, // 107°14'57.4"E
                'area_land' => 1993.20,
                'width' => 20.0, // Mặt tiền 20m
                'length' => 99.66, // Tính từ diện tích
                'road_width' => 20.0, // Đường Nguyễn Trãi
                'frontage' => true, // Mặt tiền
                'description' => '<div><h2 class="text-base sm:text-lg md:text-xl font-semibold mb-4">Bán nhà mặt tiền 20m Nguyễn Trãi - Đắc địa trung tâm Long Khánh</h2><ul class="list-none pl-0 space-y-2"><li class="text-sm sm:text-base md:text-lg">- Diện tích tổng: 1.993,2m²</li><li class="text-sm sm:text-base md:text-lg">- Diện tích thổ cư: 681,9m²</li><li class="text-sm sm:text-base md:text-lg">- Mặt tiền rộng 20m đường Nguyễn Trãi</li><li class="text-sm sm:text-base md:text-lg">- Vị trí đắc địa trung tâm Long Khánh, Đồng Nai</li><li class="text-sm sm:text-base md:text-lg">- Pháp lý: Sổ đỏ/Sổ hồng đầy đủ</li><li class="text-sm sm:text-base md:text-lg">- Giá: 65 tỷ (~32,61 triệu/m²)</li></ul><p class="text-sm sm:text-base md:text-lg mt-6">Vị trí: 10°55\'10.0"N 107°14\'57.4"E</p></div>',
                'area_built' => 681.90, // Thổ cư
                'bedrooms' => null,
                'bathrooms' => null,
                'floors' => null,
                'direction' => null,
                'price_total' => 65000000000.00, // 65 tỷ VND
                'currency' => 'VND',
                'status' => 'published',
                'published_at' => now(),
                'expired_at' => now()->addMonths(3),
            ]
        );

        // Add images for the fourth listing
        $listing4->images()->delete();
        
        $imageUrls4 = [
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765452213/20250617150549-ccf1_wm_jeapdz.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765452212/20251210150340-598b_wm_ajneuq.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765452213/20250729110932-e741_wm_wolkcz.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765452213/20250729110932-296e_wm_sx925v.jpg',
        ];

        foreach ($imageUrls4 as $index => $url) {
            Image::create([
                'listing_id' => $listing4->id,
                'url' => $url,
                'is_cover' => $index === 0,
                'sort_order' => $index + 1,
            ]);
        }

        // Sync amenities to the fourth listing
        $listing4AmenityIds = Amenity::whereIn('code', [
            'parking',
        ])->pluck('id')->toArray();

        $listing4->amenities()->sync($listing4AmenityIds);

        $this->command->info('All listings created successfully with images and amenities!');
    }
}