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

        // Create listing 5 - Lô đất CLN + DGT Xã Đại Phước, Nhơn Trạch
        $listing5 = Listing::updateOrCreate(
            ['slug' => Str::slug('Ban lo dat CLN DGT Xa Dai Phuoc Nhon Trach 311.3m2 To 79 Thua 27')],
            [
                'title' => 'Bán lô đất CLN + DGT Xã Đại Phước, Nhơn Trạch – 311,3m² (Tờ 79, Thửa 27)',
                'slug' => Str::slug('Ban lo dat CLN DGT Xa Dai Phuoc Nhon Trach 311.3m2 To 79 Thua 27'),
                'user_id' => 1,
                'property_type_id' => 3, // Đất nền
                'land_use_type_id' => 3, // Đất trồng cây lâu năm
                'legal_status_id' => 1, // Sổ đỏ
                'province_id' => null,
                'district_id' => null,
                'ward_id' => null,
                'street' => 'Xã Đại Phước',
                'address' => 'Xã Đại Phước, Nhơn Trạch, Đồng Nai',
                'lat' => 10.7500, // Tọa độ Đại Phước
                'lng' => 106.8500,
                'area_land' => 311.30,
                'width' => null,
                'length' => null,
                'road_width' => null,
                'frontage' => true, // Tiếp giáp đường giao thông
                'description' => '<div><div class="space-y-3 text-[13px] leading-relaxed text-slate-700 sm:text-sm"><p>🌿 Cần bán lô đất vị trí <span class="font-medium text-emerald-700">Xã Đại Phước, Nhơn Trạch</span>,thuộc <span class="font-medium">Tờ bản đồ số 79 – Thửa 27</span>, tổng diện tích<span class="font-semibold text-emerald-700">311,3m²</span>.Đất có mục đích sử dụng <span class="font-semibold text-emerald-700">CLN (đất trồng cây lâu năm) 278,1m²</span>và <span class="font-semibold text-emerald-700">DGT (đất giao thông) 33,2m²</span>,phù hợp để làm vườn, nhà vườn nghỉ dưỡng hoặc đầu tư lâu dài chờ chuyển mục đích theo quy hoạch.</p><p>Thửa đất có vị trí đắc địa <span class="font-medium">tiếp giáp đường giao thông</span>, thuận tiện đi lại và kết nối. Khu vực có dân cư hiện hữu, hạ tầng đang phát triển mạnh.Vị trí nằm trong khu vực Nhơn Trạch – Đại Phước có tiềm năng tăng giá tốt nhờ gần TP.HCM và các trục giao thông lớn, phù hợp cho nhà đầu tư tìm cơ hội sinh lời.</p><p>Khu vực Nhơn Trạch đang phát triển mạnh với nhiều dự án hạ tầng lớn như cảng Cái Mép - Thị Vải,khu công nghiệp và các tuyến đường kết nối thuận tiện. Đây là cơ hội đầu tư tốtvới tiềm năng tăng giá trong tương lai gần.</p></div><div class="mt-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3"><div class="mb-2 flex items-center justify-between"><h3 class="text-sm font-semibold text-emerald-800 sm:text-[15px]">🌿 Thông tin nổi bật</h3><span class="text-[11px] font-medium text-emerald-700/90 sm:text-xs">Đại Phước - Nhơn Trạch</span></div><ul class="grid gap-2 text-[13px] text-slate-700 sm:grid-cols-2 sm:text-sm"><li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span><span><span class="font-medium text-slate-900">Tổng diện tích:</span> 311,3m²</span></li><li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span><span><span class="font-medium text-slate-900">Tờ/Thửa:</span> Tờ 79 – Thửa 27</span></li><li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span><span><span class="font-medium text-slate-900">Đất CLN:</span> 278,1m² (trồng cây lâu năm)</span></li><li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span><span><span class="font-medium text-slate-900">Đất DGT:</span> 33,2m² (đất giao thông)</span></li><li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span><span><span class="font-medium text-slate-900">Vị trí:</span> Tiếp giáp đường giao thông</span></li><li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span><span><span class="font-medium text-slate-900">Pháp lý:</span> Rõ ràng, đầy đủ</span></li></ul></div></div>',
                'area_built' => null,
                'bedrooms' => null,
                'bathrooms' => null,
                'floors' => null,
                'direction' => null,
                'price_total' => 24000000000.00,
                'currency' => 'VND',
                'status' => 'published',
                'published_at' => now(),
                'expired_at' => now()->addMonths(3),
            ]
        );

        // Add image for the fifth listing
        $listing5->images()->delete();
        
        Image::create([
            'listing_id' => $listing5->id,
            'url' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765860123/z7331991216138_2e717e5ba409d6acc6396d57a1dc211f_jvsp8x.jpg',
            'is_cover' => true,
            'sort_order' => 1,
        ]);

        // Sync amenities to the fifth listing (đất trồng cây lâu năm)
        $listing5AmenityIds = Amenity::whereIn('code', [
            'garden' // Phù hợp với đất trồng cây
        ])->pluck('id')->toArray();

        $listing5->amenities()->sync($listing5AmenityIds);

        $this->command->info('All listings created successfully with updated descriptions, images and amenities!');
    }
}