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
            'description' => '<div class="space-y-6">
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-4 rounded-lg border-l-4 border-blue-500">
        <p class="text-gray-800 font-medium leading-relaxed">
            Căn hộ 3 phòng ngủ cao cấp tại dự án Sunshine City, phường Đông Ngạc - cơ hội đầu tư và an cư lý tưởng.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.84L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.84l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                </svg>
                Thông tin chi tiết
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Diện tích</span>
                    <span class="font-medium text-gray-900">98m²</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Phòng ngủ</span>
                    <span class="font-medium text-gray-900">3 phòng</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Phòng tắm</span>
                    <span class="font-medium text-gray-900">2 phòng</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Tầng</span>
                    <span class="font-medium text-gray-900">Tầng cao, view đẹp</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Nội thất</span>
                    <span class="font-medium text-gray-900">Cơ bản</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-gray-600">Bàn giao</span>
                    <span class="font-medium text-green-600">Tháng 12/2025</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                </svg>
                Tiện ích dự án
            </h3>
            <div class="grid grid-cols-1 gap-3">
                <div class="flex items-center p-3 bg-green-50 rounded-lg">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    <span class="text-gray-700">Hồ bơi ngoài trời</span>
                </div>
                <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <span class="text-gray-700">Phòng tập gym hiện đại</span>
                </div>
                <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                    <span class="text-gray-700">Khu vui chơi trẻ em</span>
                </div>
                <div class="flex items-center p-3 bg-red-50 rounded-lg">
                    <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
                    <span class="text-gray-700">Hệ thống an ninh 24/7</span>
                </div>
                <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></div>
                    <span class="text-gray-700">Thang máy cao cấp</span>
                </div>
                <div class="flex items-center p-3 bg-indigo-50 rounded-lg">
                    <div class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></div>
                    <span class="text-gray-700">Chỗ đậu xe riêng</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-amber-50 to-orange-50 p-5 rounded-xl border border-amber-200">
        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
            <svg class="w-5 h-5 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
            </svg>
            Vị trí thuận lợi
        </h3>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Gần trường học, bệnh viện</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Kết nối trung tâm thành phố</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Gần các tuyến đường chính</span>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-5 rounded-xl border-l-4 border-green-500">
        <div class="flex items-center mb-3">
            <svg class="w-6 h-6 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <h3 class="text-lg font-semibold text-green-800">Liên hệ ngay</h3>
        </div>
        <p class="text-green-700 leading-relaxed">
            Liên hệ để xem nhà và thương lượng giá. Hỗ trợ tư vấn pháp lý và thủ tục mua bán.
        </p>
    </div>
</div>',
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
                'province_id' => '01', // Hà Nội (using code)
                'district_id' => 1, // Bắc Từ Liêm
                'ward_id' => '00602', // Đông Ngạc (using code)
                'street' => 'Sunshine City',
                'address' => 'Sunshine City, Phường Đông Ngạc, Quận Bắc Từ Liêm, Hà Nội',
                'lat' => 21.0635,
                'lng' => 105.7625,
                'area_land' => 105.00, // Same as built area for apartments
                'width' => 9.0, // Typical apartment width
                'length' => 11.7, // Calculated from area
                'road_width' => 12.0, // Main road width
                'frontage' => false, // Not applicable for apartments
                'description' => '<div class="space-y-6">
    <div class="bg-gradient-to-r from-red-50 to-pink-50 p-4 rounded-lg border-l-4 border-red-500">
        <div class="flex items-center mb-2">
            <svg class="w-6 h-6 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <h2 class="text-xl font-bold text-red-800">🎉 KHUYẾN MÃI TẾT 2025</h2>
        </div>
        <p class="text-gray-800 font-medium leading-relaxed">
            Cơ hội vàng sở hữu căn hộ cao cấp Sunshine City với giá ưu đãi đặc biệt mùa Tết. Đón năm mới trong ngôi nhà mơ ước!
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                Thông tin căn hộ
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Diện tích</span>
                    <span class="font-medium text-gray-900">85-120m²</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Loại hình</span>
                    <span class="font-medium text-gray-900">2-3 phòng ngủ</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Phòng tắm</span>
                    <span class="font-medium text-gray-900">2 phòng</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Hướng</span>
                    <span class="font-medium text-gray-900">Đông Nam, Nam</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-gray-100">
                    <span class="text-gray-600">Nội thất</span>
                    <span class="font-medium text-gray-900">Hoàn thiện cao cấp</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-gray-600">Bàn giao</span>
                    <span class="font-medium text-green-600">Ngay trong tháng 1/2025</span>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-5 rounded-xl border border-yellow-200">
            <h3 class="text-lg font-semibold text-orange-900 mb-4 flex items-center">
                <svg class="w-5 h-5 text-orange-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                </svg>
                🎁 Ưu đãi đặc biệt Tết
            </h3>
            <div class="space-y-3">
                <div class="bg-white p-3 rounded-lg shadow-sm">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Giá gốc</span>
                        <span class="text-sm line-through text-gray-400">8.5 tỷ</span>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                        <span class="font-semibold text-orange-800">Giá ưu đãi Tết</span>
                        <span class="text-xl font-bold text-red-600">7.8 tỷ</span>
                    </div>
                </div>
                <div class="bg-red-100 p-3 rounded-lg">
                    <p class="text-sm text-red-800 font-medium">💰 Tiết kiệm: 700 triệu VNĐ</p>
                </div>
                <div class="bg-green-100 p-3 rounded-lg">
                    <p class="text-sm text-green-800 font-medium">🎯 Hỗ trợ vay: Lãi suất 0% trong 12 tháng</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
            <svg class="w-5 h-5 text-purple-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
            </svg>
            Tiện ích cao cấp
        </h3>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Hồ bơi vô cực</span>
            </div>
            <div class="flex items-center p-3 bg-green-50 rounded-lg">
                <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Gym & Spa</span>
            </div>
            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Sky Garden</span>
            </div>
            <div class="flex items-center p-3 bg-red-50 rounded-lg">
                <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">An ninh 5 sao</span>
            </div>
            <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Smart Home</span>
            </div>
            <div class="flex items-center p-3 bg-indigo-50 rounded-lg">
                <div class="w-3 h-3 bg-indigo-500 rounded-full mr-3"></div>
                <span class="text-gray-700 text-sm">Parking thông minh</span>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-5 rounded-xl border-l-4 border-green-500">
        <div class="flex items-center mb-3">
            <svg class="w-6 h-6 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <h3 class="text-lg font-semibold text-green-800">🏮 Đặt chỗ ngay - Đón Tết trong nhà mới</h3>
        </div>
        <p class="text-green-700 leading-relaxed mb-3">
            Chương trình ưu đãi có thời hạn đến hết tháng 1/2025. Liên hệ ngay để được tư vấn và hỗ trợ thủ tục.
        </p>
        <div class="flex flex-wrap gap-2">
            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">🔥 Ưu đãi có thời hạn</span>
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✅ Pháp lý minh bạch</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">🏆 Chất lượng 5 sao</span>
        </div>
    </div>
</div>',
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