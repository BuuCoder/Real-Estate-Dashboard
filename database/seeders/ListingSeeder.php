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

        // Create listing 4 - Lô đất thổ cư ONT Phước An, Nhơn Trạch
        $listing4 = Listing::updateOrCreate(
            ['slug' => Str::slug('Ban lo dat tho cu ONT tai Phuoc An Nhon Trach dien tich 112.6m2 To 138 Thua 516')],
            [
                'title' => 'Bán lô đất thổ cư ONT tại Phước An, Nhơn Trạch – diện tích 112,6m² (Tờ 138, Thửa 516)',
                'slug' => Str::slug('Ban lo dat tho cu ONT tai Phuoc An Nhon Trach dien tich 112.6m2 To 138 Thua 516'),
                'user_id' => 1,
                'property_type_id' => 2, // Đất nền
                'land_use_type_id' => 1, // Đất ở
                'legal_status_id' => 1, // Sổ đỏ
                'province_id' => null,
                'district_id' => null,
                'ward_id' => null,
                'street' => 'Phước An',
                'address' => 'Phước An, Nhơn Trạch, Đồng Nai',
                'lat' => 10.7833, // Tọa độ Nhơn Trạch
                'lng' => 106.8333,
                'area_land' => 112.60,
                'width' => 5.05, // Trung bình 5.0-5.1m
                'length' => 22.40, // Trung bình 22.3-22.5m
                'road_width' => null,
                'frontage' => false,
                'description' => '<div class="px-4 py-4 sm:px-6 sm:py-5">
      <div class="space-y-3 text-[13px] leading-relaxed text-slate-700 sm:text-sm">
        <p>
          Cần bán lô đất vị trí <span class="font-medium text-emerald-700">Phước An, Nhơn Trạch</span>,
          thuộc <span class="font-medium">Tờ bản đồ số 138 – Thửa 516</span>, tổng diện tích
          <span class="font-semibold text-emerald-700">112,6m²</span>.
          Đất có mục đích sử dụng <span class="font-semibold text-emerald-700">ONT (đất ở nông thôn)</span>,
          phù hợp để xây nhà ở, làm nhà vườn nhỏ hoặc đầu tư giữ tài sản lâu dài.
          Theo thông tin tra cứu, khu vực có quy hoạch sử dụng đất đến năm 2030.
        </p>

        <p>
          Lô đất có dáng thửa gọn, chiều dài hai cạnh khoảng <span class="font-medium">22,5m</span> và
          <span class="font-medium">22,3m</span>, bề ngang thể hiện khoảng <span class="font-medium">5,0–5,1m</span>
          (thích hợp thiết kế nhà 1 trệt 1 lầu/nhà cấp 4 có sân trước – sân sau tùy nhu cầu).
          Vị trí nằm trong khu vực Phước An – Nhơn Trạch, thuận tiện cho người mua cần an cư yên tĩnh
          hoặc nhà đầu tư tìm sản phẩm diện tích vừa phải, dễ giao dịch.
        </p>

        <p>
          Khu vực Nhơn Trạch đang phát triển mạnh với nhiều dự án hạ tầng lớn như cảng Cái Mép - Thị Vải,
          khu công nghiệp và các tuyến đường kết nối thuận tiện. Đây là cơ hội đầu tư tốt
          với tiềm năng tăng giá trong tương lai gần.
        </p>
      </div>

      <div class="mt-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3">
        <div class="mb-2 flex items-center justify-between">
          <h3 class="text-sm font-semibold text-emerald-800 sm:text-[15px]">
            Thông tin nổi bật
          </h3>
          <span class="text-[11px] font-medium text-emerald-700/90 sm:text-xs">
            SDĐ 2030
          </span>
        </div>

        <ul class="grid gap-2 text-[13px] text-slate-700 sm:grid-cols-2 sm:text-sm">
          <li class="flex items-start gap-2">
            <span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span>
            <span><span class="font-medium text-slate-900">Diện tích:</span> 112,6m²</span>
          </li>

          <li class="flex items-start gap-2">
            <span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span>
            <span><span class="font-medium text-slate-900">Tờ/Thửa:</span> Tờ 138 – Thửa 516</span>
          </li>

          <li class="flex items-start gap-2">
            <span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span>
            <span><span class="font-medium text-slate-900">Loại đất:</span> ONT – Đất ở nông thôn</span>
          </li>

          <li class="flex items-start gap-2">
            <span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span>
            <span>
              <span class="font-medium text-slate-900">Kích thước tham khảo:</span>
              ngang ~5,0–5,1m, dài ~22,3–22,5m
            </span>
          </li>

          <li class="flex items-start gap-2 sm:col-span-2">
            <span class="mt-1 h-2 w-2 rounded-full bg-emerald-500"></span>
            <span><span class="font-medium text-slate-900">Quy hoạch:</span> theo tra cứu hiển thị "SDĐ 2030"</span>
          </li>
        </ul>
      </div>
    </div>',
                'area_built' => null,
                'bedrooms' => null,
                'bathrooms' => null,
                'floors' => null,
                'direction' => null,
                'price_total' => 850000000.00, // 850 triệu VND (giá ước tính cho đất ONT)
                'currency' => 'VND',
                'status' => 'published',
                'published_at' => now(),
                'expired_at' => now()->addMonths(3),
            ]
        );

        // Add images for the fourth listing
        $listing4->images()->delete();
        
        $imageUrls4 = [
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765856240/z7331716364260_cc6067d1662789cb56c592684298aebf_xvzeqf.jpg',
            'https://res.cloudinary.com/dsiier5sg/image/upload/v1765856239/z7331716371789_36421626d34ea73f63fe0401ab85c52d_rflh8c.jpg'
        ];

        foreach ($imageUrls4 as $index => $url) {
            Image::create([
                'listing_id' => $listing4->id,
                'url' => $url,
                'is_cover' => $index === 0,
                'sort_order' => $index + 1,
            ]);
        }

        // Sync amenities to the fourth listing (đất nông thôn ít tiện ích)
        $listing4AmenityIds = Amenity::whereIn('code', [
            'garden' // Phù hợp với đất nông thôn
        ])->pluck('id')->toArray();

        $listing4->amenities()->sync($listing4AmenityIds);

        $this->command->info('All listings created successfully with updated descriptions, images and amenities!');
    }
}