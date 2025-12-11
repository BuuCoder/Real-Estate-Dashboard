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

        // Create or update the Sunshine City listing
        $listing = Listing::updateOrCreate(
            ['slug' => Str::slug('Quỹ chuyển nhượng Ciputra tháng 12 2025 3PN giá 9tỷ')],
            [
            'title' => 'Quỹ chuyển nhượng Ciputra tháng 12/2025 - 3PN giá 9tỷ',
            'slug' => Str::slug('Quỹ chuyển nhượng Ciputra tháng 12 2025 3PN giá 9tỷ'),
            'user_id' => 1, // Assuming user with ID 1 exists
            'property_type_id' => 2, // Apartment/Chung cư
            'land_use_type_id' => 1, // Đất ở đô thị
            'legal_status_id' => 2, // Sổ hồng
            'province_id' => null, // Will be handled separately
            'district_id' => null, // Will be handled separately  
            'ward_id' => null, // Will be handled separately
            'street' => 'Sunshine City',
            'address' => 'Sunshine City, Phường Đông Ngạc, Quận Bắc Từ Liêm, Hà Nội',
            'lat' => 21.0633,
            'lng' => 105.7622,
            'area_land' => 98.00, // Same as built area for apartments
            'width' => 8.5, // Typical apartment width
            'length' => 11.5, // Calculated from area
            'road_width' => 12.0, // Main road width
            'frontage' => false, // Not applicable for apartments
            'description' => '<div class="px-6 py-4">
    <h2 class="text-2xl font-semibold mb-4">Cập nhật danh sách căn hộ chung cư Sunshine City cần bán hiện nay</h2>
    <ul class="list-none pl-0 space-y-2">
        <li class="text-lg">- Đơn vị chuyên chuyển nhượng Sunshine city.</li>
        <li class="text-lg">- Cam kết giá tốt nhất thị trường.</li>
        <li class="text-lg">- Nhận tư vấn miễn phí mọi thủ tục về pháp lý, sổ đỏ sang tên.</li>
        <li class="text-lg">- Hỗ trợ xem nhà 24/7, gọi là xem nhà được luôn.</li>
        <li class="text-lg">- Cam kết còn hàng, giá chuẩn.</li>
        <li class="text-lg">- Miễn phí thủ tục sang tên.</li>
    </ul>

    <h3 class="text-xl font-semibold mt-6 mb-4">Quỹ căn điển hình:</h3>
    <ul class="list-none pl-0 space-y-4">
        <li>
            <strong class="text-lg">Loại căn 1 ngủ:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn 1PN 58m², toà S3, view nội khu, giá 6.5 tỷ.</li>
            </ul>
        </li>
        <li>
            <strong class="text-lg">Loại căn 2 ngủ:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn 73m², toà S3 - S4, view nội khu giá 8.3 tỷ.</li>
                <li class="text-lg">- Căn 80m², toà S1 - S2, view nội khu giá 8.5 tỷ.</li>
                <li class="text-lg">- Căn 86m², toà S1 - S2, view sân golf giá 8,7 tỷ.</li>
            </ul>
        </li>
        <li>
            <strong class="text-lg">Loại căn 3 ngủ:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn 3PN 89m², toà S3 - S4, view sông Hồng, giá 9 tỷ.</li>
                <li class="text-lg">- Căn 3PN 99m², toà S1 - S2. View nội khu, giá 9,9 tỷ.</li>
                <li class="text-lg">- Căn 3PN 104m², toà S3 - S4, view nội khu, giá 10 tỷ.</li>
                <li class="text-lg">- Căn 3PN 104m², toà S3 - S4, view sông, giá 12 tỷ.</li>
                <li class="text-lg">- Căn 3PN 116m², toà S3 - S4, view sông, giá 14 tỷ.</li>
                <li class="text-lg">- Căn 3PN 99m², toà S5 - S6, view sân golf, giá 12 tỷ.</li>
            </ul>
        </li>
        <li>
            <strong class="text-lg">Loại căn Duplex:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn duplex 5PN 190m², view sông Hồng, cầu Nhật Tân, giá 20 tỷ.</li>
                <li class="text-lg">- Căn duplex 4PN 195m², view quảng trường giá 23 tỷ.</li>
            </ul>
        </li>
    </ul>

    <p class="text-lg mt-6">* Dự án hiện tại đã full tiện ích 5*: Vườn treo, bể bơi trong và ngoài trời, siêu thị, phòng tập gym, yoga, vườn dạo bộ trên cao nối từ toà S1 sang đến S6.</p>
    <p class="text-lg">* Nội thất bàn giao cao cấp: Điều hòa âm trần 2 chiều, tủ bếp trên dưới, bếp từ hút mùi Hafele, sàn gỗ, thiết bị vệ sinh Kohler có bồn tắm và bệt thông minh, cửa chống cháy, hệ thống Smart home.</p>
</div>
',
            'area_built' => 98.00,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'floors' => 1,
            'direction' => 'Đông Nam',
            'price_total' => 9000000000.00, // 9 tỷ VND
            'currency' => 'VND',
            'status' => 'published',
            'published_at' => now(),
            'expired_at' => now()->addMonths(3),
            ]
        );

        // Add images (delete existing ones first)
        $listing->images()->delete();
        
        $imageUrls = [
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444125/20251204101859-8b17_wm_xfbqoq.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444126/20251204101859-a6f0_wm_wi7mco.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444125/20251204101859-7dfc_wm_nrkakj.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444125/20251204101859-537c_wm_d2e5jq.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444124/20251204101859-7577_wm_w5gerq.jpg',
        ];

        foreach ($imageUrls as $index => $url) {
            Image::create([
                'listing_id' => $listing->id,
                'url' => $url,
                'is_cover' => $index === 0, // First image as cover
                'sort_order' => $index + 1,
            ]);
        }

        // Sync amenities to the listing
        $amenityIds = Amenity::whereIn('code', [
            'elevator',
            'parking', 
            'security',
            'gym',
            'swimming_pool',
            'playground',
            'garden',
            'balcony',
            'air_conditioning'
        ])->pluck('id')->toArray();

        $listing->amenities()->sync($amenityIds);

        // Create or update the second Sunshine City listing - Tet promotion
        $listing2 = Listing::updateOrCreate(
            ['slug' => Str::slug('Mua nhà đón tết an vui cập nhật danh sách bán mới nhất giá ưu đãi')],
            [
                'title' => 'Mua nhà đón tết an vui - Cập nhật danh sách bán mới nhất giá ưu đãi',
                'slug' => Str::slug('Mua nhà đón tết an vui cập nhật danh sách bán mới nhất giá ưu đãi'),
                'user_id' => 1,
                'property_type_id' => 2, // Apartment/Chung cư
                'land_use_type_id' => 1, // Đất ở đô thị
                'legal_status_id' => 2, // Sổ hồng
                'province_id' => null, // Will be handled separately
                'district_id' => null, // Will be handled separately
                'ward_id' => null, // Will be handled separately
                'street' => 'Sunshine City',
                'address' => 'Sunshine City, Phường Đông Ngạc, Quận Bắc Từ Liêm, Hà Nội',
                'lat' => 21.0635,
                'lng' => 105.7625,
                'area_land' => 105.00, // Same as built area for apartments
                'width' => 9.0, // Typical apartment width
                'length' => 11.7, // Calculated from area
                'road_width' => 12.0, // Main road width
                'frontage' => false, // Not applicable for apartments
                'description' => '<div class="px-6 py-4">
    <h2 class="text-2xl font-semibold mb-4">Cập nhật danh sách căn hộ chung cư Sunshine City cần bán hiện nay</h2>
    <ul class="list-none pl-0 space-y-2">
        <li class="text-lg">- Đơn vị chuyên chuyển nhượng Sunshine city.</li>
        <li class="text-lg">- Cam kết giá tốt nhất thị trường.</li>
        <li class="text-lg">- Nhận tư vấn miễn phí mọi thủ tục về pháp lý, sổ đỏ sang tên.</li>
        <li class="text-lg">- Hỗ trợ xem nhà 24/7, gọi là xem nhà được luôn.</li>
        <li class="text-lg">- Cam kết còn hàng, giá chuẩn.</li>
        <li class="text-lg">- Miễn phí thủ tục sang tên.</li>
    </ul>

    <h3 class="text-xl font-semibold mt-6 mb-4">Quỹ căn điển hình:</h3>
    <ul class="list-none pl-0 space-y-4">
        <li>
            <strong class="text-lg">Loại căn 1 ngủ:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn 1PN 58m², toà S3, view nội khu, giá 6.5 tỷ.</li>
            </ul>
        </li>
        <li>
            <strong class="text-lg">Loại căn 2 ngủ:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn 73m², toà S3 - S4, view nội khu giá 8.3 tỷ.</li>
                <li class="text-lg">- Căn 80m², toà S1 - S2, view nội khu giá 8.5 tỷ.</li>
                <li class="text-lg">- Căn 86m², toà S1 - S2, view sân golf giá 8,7 tỷ.</li>
            </ul>
        </li>
        <li>
            <strong class="text-lg">Loại căn 3 ngủ:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn 3PN 89m², toà S3 - S4, view sông Hồng, giá 9 tỷ.</li>
                <li class="text-lg">- Căn 3PN 99m², toà S1 - S2. View nội khu, giá 9,9 tỷ.</li>
                <li class="text-lg">- Căn 3PN 104m², toà S3 - S4, view nội khu, giá 10 tỷ.</li>
                <li class="text-lg">- Căn 3PN 104m², toà S3 - S4, view sông, giá 12 tỷ.</li>
                <li class="text-lg">- Căn 3PN 116m², toà S3 - S4, view sông, giá 14 tỷ.</li>
                <li class="text-lg">- Căn 3PN 99m², toà S5 - S6, view sân golf, giá 12 tỷ.</li>
            </ul>
        </li>
        <li>
            <strong class="text-lg">Loại căn Duplex:</strong>
            <ul class="list-none pl-4 space-y-2">
                <li class="text-lg">- Căn duplex 5PN 190m², view sông Hồng, cầu Nhật Tân, giá 20 tỷ.</li>
                <li class="text-lg">- Căn duplex 4PN 195m², view quảng trường giá 23 tỷ.</li>
            </ul>
        </li>
    </ul>

    <p class="text-lg mt-6">* Dự án hiện tại đã full tiện ích 5*: Vườn treo, bể bơi trong và ngoài trời, siêu thị, phòng tập gym, yoga, vườn dạo bộ trên cao nối từ toà S1 sang đến S6.</p>
    <p class="text-lg">* Nội thất bàn giao cao cấp: Điều hòa âm trần 2 chiều, tủ bếp trên dưới, bếp từ hút mùi Hafele, sàn gỗ, thiết bị vệ sinh Kohler có bồn tắm và bệt thông minh, cửa chống cháy, hệ thống Smart home.</p>
</div>
',
                'area_built' => 105.00,
                'bedrooms' => 2,
                'bathrooms' => 2,
                'floors' => 1,
                'direction' => 'Nam',
                'price_total' => 7800000000.00, // 7.8 tỷ VND (giá ưu đãi)
                'currency' => 'VND',
                'status' => 'published',
                'published_at' => now(),
                'expired_at' => now()->addMonth(), // Ưu đãi có thời hạn
            ]
        );

        // Add images for the second listing
        $listing2->images()->delete();
        
        $imageUrls2 = [
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444480/20231222154730-a943_wm_q74kbg.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444480/20231222154839-84b7_wm_zgnhka.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444479/20231222154748-fa66_wm_z2zk9t.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444479/20231222154840-7cc0_wm_jop1jl.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444479/20231222154730-4de2_wm_esgpaa.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765444126/20251204101859-a6f0_wm_wi7mco.jpg',
        ];

        foreach ($imageUrls2 as $index => $url) {
            Image::create([
                'listing_id' => $listing2->id,
                'url' => $url,
                'is_cover' => $index === 0,
                'sort_order' => $index + 1,
            ]);
        }

        // Sync amenities to the second listing (premium amenities)
        $premiumAmenityIds = Amenity::whereIn('code', [
            'elevator',
            'parking',
            'security',
            'gym',
            'swimming_pool',
            'playground',
            'garden',
            'shopping_center',
            'balcony',
            'air_conditioning'
        ])->pluck('id')->toArray();

        $listing2->amenities()->sync($premiumAmenityIds);

        $this->command->info('Both Sunshine City listings created successfully with images and amenities!');
    }
}