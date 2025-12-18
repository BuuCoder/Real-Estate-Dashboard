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
        $this->createThangLongRealGroupPost();
    }


    private function createThangLongRealGroupPost(): void
    {
        $title = 'Thang Long Real Group phát triển đô thị gần sân bay Long Thành';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-18 10:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-800">
            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Dự án mới
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-blue-950 sm:text-xl">Thang Long Real Group phát triển đô thị gần sân bay Long Thành</h1>
        <p class="mt-2 text-sm leading-6 text-blue-900/80">
            Thang Long Real Group công bố kế hoạch phát triển khu đô thị hiện đại tại khu vực gần sân bay Long Thành, tỉnh Đồng Nai. Dự án hứa hẹn mang đến không gian sống chất lượng cao với thiết kế hiện đại và tiện ích đầy đủ.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-blue-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-xs font-medium text-blue-700">Vị trí</p>
            </div>
            <p class="text-sm text-blue-950">Gần sân bay Long Thành • Đồng Nai</p>
        </div>
        <div class="rounded-xl border border-blue-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-blue-700">Loại hình</p>
            </div>
            <p class="text-sm text-blue-950">Khu đô thị hiện đại với căn hộ và tiện ích</p>
        </div>
        <div class="rounded-xl border border-blue-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <p class="text-xs font-medium text-blue-700">Ưu thế</p>
            </div>
            <p class="text-sm text-blue-950">Kết nối thuận lợi với sân bay quốc tế</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-blue-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-blue-950">Hình ảnh dự án</h2>
            </div>
            <span class="text-xs text-blue-700">Nguồn: Thang Long Real Group</span>
        </div>
        <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-2" id="gallery-grid">
            <!-- 1 -->
            <figure class="group overflow-hidden rounded-xl border border-blue-100 bg-blue-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1766020702/thang-long-home_kdf1ez.webp" alt="Thang Long Home - Hình 1" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-blue-900/80">Tổng quan khu đô thị Thang Long Home.</figcaption>
            </figure>
            <!-- 2 -->
            <figure class="group overflow-hidden rounded-xl border border-blue-100 bg-blue-50 cursor-pointer sm:col-span-2 lg:col-span-2">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1766020703/phoi-canh-fiato-airpot_mjckkz.webp" alt="Phối cảnh Fiato Airport - Cover" class="h-52 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-blue-900/80">Phối cảnh dự án Fiato Airport - khu đô thị hiện đại gần sân bay Long Thành.</figcaption>
            </figure>
            <!-- 3 -->
            <figure class="group overflow-hidden rounded-xl border border-blue-100 bg-blue-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1766020702/phoi-canh-can-ho-2-phong-ngu_chcmuc.webp" alt="Phối cảnh căn hộ 2 phòng ngủ - Hình 3" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-blue-900/80">Thiết kế căn hộ 2 phòng ngủ hiện đại.</figcaption>
            </figure>
            <!-- 4 -->
            <figure class="group overflow-hidden rounded-xl border border-blue-100 bg-blue-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1766020702/hub-thuong-mai_znt43p.webp" alt="Hub thương mại - Hình 4" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-blue-900/80">Hub thương mại tích hợp đa dịch vụ.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-blue-900/80">
            <p>
                Thang Long Real Group vừa công bố kế hoạch phát triển khu đô thị hiện đại tại khu vực gần sân bay Long Thành, tỉnh Đồng Nai. Dự án được kỳ vọng sẽ trở thành một trong những khu đô thị đáng sống nhất khu vực Đông Nam Bộ, tận dụng lợi thế từ sân bay quốc tế Long Thành sắp đi vào hoạt động.
            </p>
            
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <h3 class="font-semibold text-blue-800">Thông tin dự án Fiato Airport</h3>
            </div>
            <ul class="list-none space-y-2 text-blue-900">
                <li>• <strong>Vị trí:</strong> Gần sân bay quốc tế Long Thành, Đồng Nai</li>
                <li>• <strong>Quy mô:</strong> Khu đô thị tích hợp đa chức năng</li>
                <li>• <strong>Sản phẩm:</strong> Căn hộ, shophouse, hub thương mại</li>
                <li>• <strong>Tiện ích:</strong> Trung tâm thương mại, khu vui chơi, công viên</li>
                <li>• <strong>Kết nối:</strong> Thuận tiện di chuyển đến sân bay và TP.HCM</li>
            </ul>

            <p>
                Dự án Fiato Airport được thiết kế theo tiêu chuẩn quốc tế với không gian sống hiện đại, tiện nghi đầy đủ. Các căn hộ được bố trí thông minh, tối ưu hóa ánh sáng tự nhiên và tầm nhìn. Đặc biệt, khu đô thị tích hợp hub thương mại đa dịch vụ, đáp ứng mọi nhu cầu sinh hoạt của cư dân.
            </p>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Lợi thế vị trí</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Sân bay Long Thành:</strong> Kết nối quốc tế thuận lợi</li>
                    <li>• <strong>Cao tốc Bến Lức - Long Thành:</strong> Liên kết với TP.HCM</li>
                    <li>• <strong>Khu công nghiệp:</strong> Cơ hội việc làm và phát triển</li>
                    <li>• <strong>Hạ tầng hoàn chỉnh:</strong> Điện, nước, internet tốc độ cao</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-blue-950 mt-6 mb-3">Tiềm năng đầu tư</h2>
            
            <p>
                Với vị trí chiến lược gần sân bay quốc tế Long Thành, dự án của Thang Long Real Group hứa hẹn mang lại giá trị đầu tư bền vững. Khu vực này đang trở thành tâm điểm phát triển kinh tế mới của vùng Đông Nam Bộ, thu hút nhiều nhà đầu tư trong và ngoài nước.
            </p>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Cơ hội đầu tư bất động sản</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Căn hộ:</strong> Phù hợp cho gia đình trẻ và chuyên gia</li>
                    <li>• <strong>Shophouse:</strong> Kinh doanh dịch vụ, thương mại</li>
                    <li>• <strong>Cho thuê:</strong> Nhu cầu cao từ nhân viên sân bay và khu công nghiệp</li>
                    <li>• <strong>Tăng giá:</strong> Tiềm năng tăng trưởng mạnh khi sân bay hoạt động</li>
                </ul>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-blue-700">
                Nguồn tham khảo: 
                <a href="https://vnexpress.net/thang-long-real-group-phat-trien-do-thi-gan-san-bay-long-thanh-4939614.html" target="_blank" rel="nofollow noopener" class="font-medium text-blue-600 hover:underline">
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
            'description' => 'Thang Long Real Group công bố kế hoạch phát triển khu đô thị hiện đại gần sân bay Long Thành, Đồng Nai với thiết kế hiện đại và tiện ích đầy đủ.',
            'image' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1766020703/phoi-canh-fiato-airpot_mjckkz.webp',
            'datePublished' => '2025-12-18T10:00:00+07:00',
            'dateModified' => '2025-12-18T10:00:00+07:00',
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
            'keywords' => 'Thang Long Real Group, sân bay Long Thành, Đồng Nai, bất động sản, khu đô thị',
            'articleSection' => 'Tin tức dự án',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Dự án mới', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=projects'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        
        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Thang Long Real Group công bố kế hoạch phát triển khu đô thị hiện đại gần sân bay Long Thành, Đồng Nai. Dự án Fiato Airport hứa hẹn mang đến không gian sống chất lượng cao với thiết kế hiện đại và tiện ích đầy đủ.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1766020703/phoi-canh-fiato-airpot_mjckkz.webp',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Thang Long Real Group phát triển khu đô thị hiện đại gần sân bay Long Thành. Dự án Fiato Airport với thiết kế hiện đại và tiện ích đầy đủ.',
            'meta_keywords' => 'Thang Long Real Group, sân bay Long Thành, Đồng Nai, bất động sản, khu đô thị, Fiato Airport, căn hộ',
            'og_title' => $title,
            'og_description' => 'Thang Long Real Group công bố kế hoạch phát triển khu đô thị hiện đại gần sân bay Long Thành với thiết kế hiện đại.',
            'og_image' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1766020703/phoi-canh-fiato-airpot_mjckkz.webp',
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

        // Link to post type (projects - Dự án mới)
        $projectsType = DB::table('post_types')->where('code', 'projects')->first();
        if (!$projectsType) {
            // Create projects post type if not exists
            $projectsTypeId = DB::table('post_types')->insertGetId([
                'code' => 'projects',
                'name' => 'Dự án mới',
            ]);
        } else {
            $projectsTypeId = $projectsType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $projectsTypeId,
        ]);

        // Link to tags
        $tagCodes = ['dong-nai', 'thang-long-real-group', 'san-bay-long-thanh'];
        
        // Create tags if not exist
        foreach ($tagCodes as $tagCode) {
            $tagNames = [
                'dong-nai' => 'Đồng Nai',
                'thang-long-real-group' => 'Thang Long Real Group',
                'san-bay-long-thanh' => 'Sân bay Long Thành'
            ];
            
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