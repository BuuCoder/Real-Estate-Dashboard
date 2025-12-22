<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class VnExpressPostSeeder extends Seeder
{
    public function run(): void
    {
        $this->createDongNaiDauGiaLoDatVangPost();
    }

    private function createDongNaiDauGiaLoDatVangPost(): void
    {
        $title = 'Đồng Nai sắp đấu giá lô đất vàng với giá khởi điểm 5.000 tỷ đồng';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-22 09:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Đấu giá đất
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Đồng Nai sắp đấu giá lô đất vàng với giá khởi điểm 5.000 tỷ đồng</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Tỉnh Đồng Nai chuẩn bị tổ chức đấu giá khu đất rộng hơn 35 ha tại xã Phước An, huyện Nhơn Trạch với giá khởi điểm lên đến 5.000 tỷ đồng. Đây được xem là lô đất vàng với vị trí đắc địa gần sân bay Long Thành.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Vị trí</p>
            </div>
            <p class="text-sm text-emerald-950">Xã Phước An • Huyện Nhơn Trạch • Đồng Nai</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Diện tích</p>
            </div>
            <p class="text-sm text-emerald-950">Hơn 35 ha đất thương mại dịch vụ</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Giá khởi điểm</p>
            </div>
            <p class="text-sm text-emerald-950 font-semibold">5.000 tỷ đồng</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh khu đất</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: VnExpress</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <!-- Cover image -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1766415732/khu-dat-du-kien-duoc-dau-gia-tai-xa-phuoc-an-5000-ty_ctzbwf.webp" alt="Khu đất dự kiến được đấu giá tại xã Phước An" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Khu đất hơn 35 ha tại xã Phước An, huyện Nhơn Trạch dự kiến được đấu giá với giá khởi điểm 5.000 tỷ đồng.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>
                UBND tỉnh Đồng Nai vừa công bố kế hoạch tổ chức đấu giá quyền sử dụng đất đối với khu đất rộng hơn 35 ha tại xã Phước An, huyện Nhơn Trạch. Đây là một trong những lô đất có vị trí đắc địa nhất khu vực, nằm gần sân bay quốc tế Long Thành đang được xây dựng.
            </p>
            
            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Thông tin lô đất đấu giá</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Vị trí:</strong> Xã Phước An, huyện Nhơn Trạch, tỉnh Đồng Nai</li>
                    <li>• <strong>Diện tích:</strong> Hơn 35 ha</li>
                    <li>• <strong>Mục đích sử dụng:</strong> Đất thương mại dịch vụ</li>
                    <li>• <strong>Giá khởi điểm:</strong> 5.000 tỷ đồng</li>
                    <li>• <strong>Thời hạn sử dụng:</strong> 50 năm</li>
                </ul>
            </div>

            <p>
                Theo thông tin từ UBND tỉnh Đồng Nai, khu đất này có vị trí chiến lược, nằm trong vùng quy hoạch phát triển đô thị và dịch vụ hỗ trợ sân bay Long Thành. Với diện tích lớn và mục đích sử dụng là đất thương mại dịch vụ, lô đất này được kỳ vọng sẽ thu hút nhiều nhà đầu tư lớn trong và ngoài nước.
            </p>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Lợi thế vị trí</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Gần sân bay Long Thành:</strong> Cách sân bay quốc tế Long Thành chỉ vài km</li>
                    <li>• <strong>Kết nối giao thông:</strong> Thuận tiện tiếp cận cao tốc và các tuyến đường chính</li>
                    <li>• <strong>Vùng phát triển:</strong> Nằm trong khu vực quy hoạch đô thị mới</li>
                    <li>• <strong>Tiềm năng:</strong> Phù hợp phát triển khu thương mại, dịch vụ logistics</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Tiềm năng phát triển</h2>
            
            <p>
                Huyện Nhơn Trạch đang trở thành điểm nóng bất động sản của tỉnh Đồng Nai nhờ vị trí chiến lược gần sân bay Long Thành và TP.HCM. Khu vực này được quy hoạch trở thành đô thị vệ tinh, hỗ trợ phát triển kinh tế cho cả vùng Đông Nam Bộ.
            </p>

            <p>
                Với giá khởi điểm 5.000 tỷ đồng cho hơn 35 ha đất, mức giá trung bình khoảng 14,3 triệu đồng/m². Đây được đánh giá là mức giá hợp lý so với tiềm năng phát triển của khu vực, đặc biệt khi sân bay Long Thành dự kiến đi vào hoạt động trong những năm tới.
            </p>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Cơ hội đầu tư</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Thương mại dịch vụ:</strong> Phát triển trung tâm thương mại, khách sạn</li>
                    <li>• <strong>Logistics:</strong> Kho bãi, trung tâm phân phối hàng hóa</li>
                    <li>• <strong>Văn phòng:</strong> Tòa nhà văn phòng cho thuê</li>
                    <li>• <strong>Khu phức hợp:</strong> Dự án đa chức năng tích hợp</li>
                </ul>
            </div>

            <p>
                Cuộc đấu giá dự kiến sẽ thu hút sự quan tâm của nhiều tập đoàn bất động sản lớn trong nước và quốc tế. Đây là cơ hội hiếm có để sở hữu quỹ đất lớn tại vị trí đắc địa, với tiềm năng tăng giá mạnh khi hạ tầng khu vực hoàn thiện.
            </p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://vnexpress.net/dong-nai-sap-dau-gia-lo-dat-vang-voi-gia-khoi-diem-5-000-ty-dong-4987910.html" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">
                    VnExpress
                </a>
            </p>    
        </div>
    </div>
</article>
HTML;


        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Tỉnh Đồng Nai chuẩn bị tổ chức đấu giá khu đất rộng hơn 35 ha tại xã Phước An, huyện Nhơn Trạch với giá khởi điểm 5.000 tỷ đồng.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766415732/khu-dat-du-kien-duoc-dau-gia-tai-xa-phuoc-an-5000-ty_ctzbwf.webp',
            'datePublished' => '2025-12-22T09:00:00+07:00',
            'dateModified' => '2025-12-22T09:00:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'VnExpress',
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://phatdatbatdongsan.com/images/logo.png',
                ],
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            ],
            'keywords' => 'Đồng Nai, đấu giá đất, Nhơn Trạch, sân bay Long Thành, bất động sản, 5000 tỷ',
            'articleSection' => 'Tin tức thị trường',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Thị trường', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=market'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Tỉnh Đồng Nai chuẩn bị tổ chức đấu giá khu đất rộng hơn 35 ha tại xã Phước An, huyện Nhơn Trạch với giá khởi điểm 5.000 tỷ đồng. Đây là lô đất vàng với vị trí đắc địa gần sân bay Long Thành.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766415732/khu-dat-du-kien-duoc-dau-gia-tai-xa-phuoc-an-5000-ty_ctzbwf.webp',
            'reading_minutes' => 4,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Đồng Nai sắp đấu giá lô đất vàng hơn 35 ha tại xã Phước An, huyện Nhơn Trạch với giá khởi điểm 5.000 tỷ đồng, gần sân bay Long Thành.',
            'meta_keywords' => 'Đồng Nai, đấu giá đất, Nhơn Trạch, Phước An, sân bay Long Thành, bất động sản, 5000 tỷ, lô đất vàng',
            'og_title' => $title,
            'og_description' => 'Tỉnh Đồng Nai chuẩn bị đấu giá khu đất hơn 35 ha tại Nhơn Trạch với giá khởi điểm 5.000 tỷ đồng.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766415732/khu-dat-du-kien-duoc-dau-gia-tai-xa-phuoc-an-5000-ty_ctzbwf.webp',
            'twitter_card' => 'summary_large_image',
            'robots_index' => true,
            'robots_follow' => true,
            'robots_advanced' => null,
            'schema_type' => 'NewsArticle',
            'schema_json' => json_encode($schemaJson, JSON_UNESCAPED_UNICODE),
            'hreflangs' => json_encode([
                ['lang' => 'vi', 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            ], JSON_UNESCAPED_UNICODE),
            'breadcrumbs' => json_encode($breadcrumbs, JSON_UNESCAPED_UNICODE),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Link to post type (market - Thị trường)
        $marketType = DB::table('post_types')->where('code', 'market')->first();
        if (!$marketType) {
            $marketTypeId = DB::table('post_types')->insertGetId([
                'code' => 'market',
                'name' => 'Thị trường',
            ]);
        } else {
            $marketTypeId = $marketType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $marketTypeId,
        ]);

        // Link to tags
        $tagCodes = ['dong-nai', 'dau-gia-dat', 'nhon-trach', 'san-bay-long-thanh'];
        
        // Create tags if not exist
        $tagNames = [
            'dong-nai' => 'Đồng Nai',
            'dau-gia-dat' => 'Đấu giá đất',
            'nhon-trach' => 'Nhơn Trạch',
            'san-bay-long-thanh' => 'Sân bay Long Thành'
        ];
        
        foreach ($tagCodes as $tagCode) {
            $existingTag = DB::table('tags')->where('code', $tagCode)->first();
            if (!$existingTag) {
                DB::table('tags')->insert([
                    'code' => $tagCode,
                    'name' => $tagNames[$tagCode],
                ]);
            }
        }
        
        $tags = DB::table('tags')->whereIn('code', $tagCodes)->get();
        foreach ($tags as $tag) {
            DB::table('post_tags')->insert([
                'post_id' => $postId,
                'tag_id' => $tag->id,
            ]);
        }

        $this->command->info("Created post: {$title}");
    }
}