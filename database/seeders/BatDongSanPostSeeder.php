<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BatDongSanPostSeeder extends Seeder
{
    public function run(): void
    {
        $this->createBatDongSanBungNguonCungPost();
        $this->createChungCuDocVanhDaiPost();
    }

    private function createBatDongSanBungNguonCungPost(): void
    {
        $title = 'Bất động sản TP HCM bung nguồn cung dịp cận Tết';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2026-01-05 10:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Thị trường
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Bất động sản TP HCM bung nguồn cung dịp cận Tết</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Cận Tết Nguyên đán, thị trường bất động sản TP HCM sôi động hơn với hàng loạt dự án đồng loạt mở bán, tung ưu đãi mạnh nhằm kích thích thanh khoản và đón nhịp phục hồi.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Số dự án mở bán</p>
            </div>
            <p class="text-sm text-emerald-950">Hơn 30 dự án</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Nguồn cung dự kiến 2026</p>
            </div>
            <p class="text-sm text-emerald-950">17.200+ căn hộ</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Dự báo tăng giá</p>
            </div>
            <p class="text-sm text-emerald-950">8-15%</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh minh họa</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: VnExpress</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621055/bat-djong-san-khu-djong-tp-hcm-thang-122025_u3llny.webp" alt="Bất động sản khu Đông TP HCM" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Bất động sản khu Đông TP HCM, tháng 12/2025. Ảnh: Quỳnh Trần</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Ghi nhận của VnExpress cho thấy, cận Tết Bính Ngọ, thị trường bất động sản TP HCM và các tỉnh phía Nam đang có hơn 30 dự án lớn nhỏ thuộc nhiều phân khúc đồng loạt ra hàng.</p>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Phân khúc hạng sang</h2>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Các dự án nổi bật</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Van Phuc Group:</strong> 30 sản phẩm nhà phố, shophouse - chiết khấu lên đến 28%</li>
                    <li>• <strong>The Park Avenue (Novaland):</strong> Gần 1.000 sản phẩm - giá 120-150 triệu/m²</li>
                    <li>• <strong>Masteri Park Place:</strong> 1.600 căn hộ - giá từ 120 triệu/m², chiết khấu 15%</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Phân khúc trung cấp</h2>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Các dự án nổi bật</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>The Gió Riverside (An Gia):</strong> Hỗ trợ 100% lãi suất 36 tháng, chiết khấu 23,5%</li>
                    <li>• <strong>Phú Đông Sky One:</strong> 800+ căn hộ, chiết khấu 10% (~239 triệu đồng)</li>
                    <li>• <strong>Bcons Center City:</strong> Gần 2.000 căn hộ, giá từ 55 triệu/m²</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Nhận định chuyên gia</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Ông Võ Huỳnh Tuấn Kiệt - CBRE Việt Nam</h3>
                </div>
                <p class="text-amber-900">Đây là giai đoạn bán hàng sôi động trong năm do sức mua tích cực hơn nhờ tâm lý khách hàng cởi mở và dòng tiền dồi dào, đặc biệt là nguồn kiều hối.</p>
            </div>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Ông Đinh Minh Tuấn - Batdongsan</h3>
                </div>
                <p class="text-purple-900">Đà phục hồi hiện nay mang tính phân hóa rõ rệt, chưa lan tỏa trên diện rộng. Thanh khoản chủ yếu tập trung ở các dự án có vị trí thuận lợi, pháp lý đầy đủ.</p>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Dự báo thị trường 2026</h2>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <h3 class="font-semibold text-gray-800">Nguồn cung và giá cả</h3>
                </div>
                <ul class="list-none space-y-2 text-gray-900">
                    <li>• <strong>TP HCM:</strong> 17.200+ căn hộ mở bán mới, 50% từ đại đô thị khu Đông</li>
                    <li>• <strong>Giá TP HCM:</strong> 90% nguồn cung trên 100 triệu/m²</li>
                    <li>• <strong>Tỉnh lân cận:</strong> 40-50 triệu/m²</li>
                    <li>• <strong>Tổng nguồn cung vùng:</strong> Có thể vượt 20.000 sản phẩm</li>
                    <li>• <strong>Dự báo tăng giá:</strong> 8-15% tùy thị trường</li>
                </ul>
            </div>

            <p>Các chuyên gia nhận định 2026 là năm đầu tiên thị trường bước vào chu kỳ phát triển mới theo hướng ổn định và bền vững hơn.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://vnexpress.net/bat-dong-san-tp-hcm-bung-nguon-cung-dip-can-tet-5001019.html" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">VnExpress</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Cận Tết Nguyên đán, thị trường bất động sản TP HCM sôi động hơn với hàng loạt dự án đồng loạt mở bán.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621055/bat-djong-san-khu-djong-tp-hcm-thang-122025_u3llny.webp',
            'datePublished' => '2026-01-05T10:00:00+07:00',
            'dateModified' => '2026-01-05T10:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'VnExpress'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'bất động sản TP HCM, nguồn cung căn hộ, thị trường bất động sản 2026',
            'articleSection' => 'Thị trường',
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
            'summary' => 'Cận Tết Nguyên đán, thị trường bất động sản TP HCM sôi động hơn với hàng loạt dự án đồng loạt mở bán, tung ưu đãi mạnh nhằm kích thích thanh khoản và đón nhịp phục hồi.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621055/bat-djong-san-khu-djong-tp-hcm-thang-122025_u3llny.webp',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Bất động sản TP HCM bung nguồn cung dịp cận Tết | Phát Đạt Bất Động Sản',
            'meta_description' => 'Thị trường bất động sản TP HCM sôi động với hơn 30 dự án mở bán cận Tết, chiết khấu lên đến 28%, nguồn cung 2026 dự kiến 17.200+ căn hộ.',
            'meta_keywords' => 'bất động sản TP HCM, nguồn cung căn hộ, thị trường bất động sản 2026, mở bán dự án, chiết khấu bất động sản',
            'og_title' => $title,
            'og_description' => 'Cận Tết Nguyên đán, thị trường bất động sản TP HCM sôi động hơn với hàng loạt dự án đồng loạt mở bán.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621055/bat-djong-san-khu-djong-tp-hcm-thang-122025_u3llny.webp',
            'twitter_card' => 'summary_large_image',
            'robots_index' => true,
            'robots_follow' => true,
            'robots_advanced' => null,
            'schema_type' => 'Article',
            'schema_json' => json_encode($schemaJson, JSON_UNESCAPED_UNICODE),
            'hreflangs' => json_encode([['lang' => 'vi', 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug]], JSON_UNESCAPED_UNICODE),
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
        $tagCodes = ['thi-truong-bat-dong-san', 'tp-hcm', 'can-ho'];
        $tagNames = [
            'thi-truong-bat-dong-san' => 'Thị trường bất động sản',
            'tp-hcm' => 'TP HCM',
            'can-ho' => 'Căn hộ'
        ];
        
        foreach ($tagCodes as $tagCode) {
            $existingTag = DB::table('tags')->where('code', $tagCode)->first();
            if (!$existingTag) {
                DB::table('tags')->insert(['code' => $tagCode, 'name' => $tagNames[$tagCode]]);
            }
        }
        
        $tags = DB::table('tags')->whereIn('code', $tagCodes)->get();
        foreach ($tags as $tag) {
            DB::table('post_tags')->insert(['post_id' => $postId, 'tag_id' => $tag->id]);
        }

        $this->command->info("Created post: {$title}");
    }

    private function createChungCuDocVanhDaiPost(): void
    {
        $title = 'Lượng chung cư dọc vành đai TP HCM tăng gấp ba sau một thập kỷ';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-20 10:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Thị trường
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Lượng chung cư dọc vành đai TP HCM tăng gấp ba sau một thập kỷ</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Sau một thập kỷ, số dự án chung cư dọc vành đai TP HCM tăng gấp 3,2 lần, phản ánh xu hướng giãn dân theo hạ tầng nhưng cũng đặt ra thách thức về quy hoạch và chất lượng đô thị.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Trước 2015</p>
            </div>
            <p class="text-sm text-emerald-950">324 dự án</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Hiện nay</p>
            </div>
            <p class="text-sm text-emerald-950">~1.050 dự án</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Mức tăng</p>
            </div>
            <p class="text-sm text-emerald-950">Gấp 3,2 lần</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh minh họa</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: VnExpress</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621088/djuong-vanh-djai-3-giua-khu-dan-cu-o-tp-hcm_qk4m4j.webp" alt="Đường vành đai 3 giữa khu dân cư ở TP HCM" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Đường vành đai 3 giữa khu dân cư ở TP HCM. Ảnh: Quỳnh Trần</figcaption>
            </figure>
        </div>

    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Trước 2015</p>
            </div>
            <p class="text-sm text-emerald-950">324 dự án</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Hiện nay</p>
            </div>
            <p class="text-sm text-emerald-950">~1.050 dự án</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Mức tăng</p>
            </div>
            <p class="text-sm text-emerald-950">Gấp 3,2 lần</p>
        </div>
    </div>

    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh minh họa</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: VnExpress</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621088/djuong-vanh-djai-3-giua-khu-dan-cu-o-tp-hcm_qk4m4j.webp" alt="Đường vành đai 3 giữa khu dân cư ở TP HCM" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Đường vành đai 3 giữa khu dân cư ở TP HCM. Ảnh: Quỳnh Trần</figcaption>
            </figure>
        </div>

        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Trước năm 2015, khu vực TP HCM và vùng ven quanh các trục hạ tầng trọng điểm như Vành đai 2, Vành đai 3 và Vành đai 4 chỉ có khoảng 324 dự án chung cư triển khai. Đến nay, con số này tăng lên khoảng 1.050 dự án.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Xu hướng phát triển</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• Dự án dịch chuyển ra ngoài, bám theo các trục hạ tầng lớn</li>
                    <li>• Lượng dự án cách trung tâm 20-40 km bùng nổ mạnh mẽ</li>
                    <li>• Các trục QL13, cao tốc Tân Vạn, Phạm Văn Đồng, QL1K tăng gấp 2-3 lần</li>
                </ul>
            </div>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Nguyên nhân</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• Quỹ đất phát triển tại khu vực lõi trung tâm ngày càng hạn chế</li>
                    <li>• Chi phí phát triển dự án tại ven đô thấp hơn đáng kể</li>
                    <li>• Giá căn hộ trung tâm vượt khả năng chi trả của đa số người mua</li>
                    <li>• Hạ tầng giao thông được cải thiện rút ngắn thời gian di chuyển</li>
                </ul>
            </div>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Thách thức</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• Ngu
y cơ lặp lại bất cập của nội đô khi mật độ dân cư tăng nhanh</li>
                    <li>• Hệ thống trường học, bệnh viện chưa được đầu tư tương xứng</li>
                    <li>• Giá BĐS quanh hạ tầng trọng điểm tăng 15-18%, cao hơn mức trung bình 6-10%</li>
                </ul>
            </div>

            <p>Theo CBRE, giá nhà ở quanh tuyến hạ tầng trọng điểm ghi nhận mức tăng 15-18%, cao hơn mức tăng trung bình 6-10% tại các quận nội thành.</p>
        </div>

        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://vnexpress.net/luong-chung-cu-doc-vanh-dai-tp-hcm-tang-gap-ba-sau-mot-thap-ky-4996241.html" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">VnExpress</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Sau một thập kỷ, số dự án chung cư dọc vành đai TP HCM tăng gấp 3,2 lần.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621088/djuong-vanh-djai-3-giua-khu-dan-cu-o-tp-hcm_qk4m4j.webp',
            'datePublished' => '2025-12-20T10:00:00+07:00',
            'dateModified' => '2025-12-20T10:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'VnExpress'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'chung cư vành đai, TP HCM, hạ tầng giao thông, thị trường bất động sản',
            'articleSection' => 'Thị trường',
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
            'summary' => 'Sau một thập kỷ, số dự án chung cư dọc vành đai TP HCM tăng gấp 3,2 lần, phản ánh xu hướng giãn dân theo hạ tầng.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621088/djuong-vanh-djai-3-giua-khu-dan-cu-o-tp-hcm_qk4m4j.webp',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Chung cư dọc vành đai TP HCM tăng gấp 3 lần | Phát Đạt Bất Động Sản',
            'meta_description' => 'Số dự án chung cư dọc vành đai TP HCM tăng từ 324 lên 1.050 dự án sau 10 năm, phản ánh xu hướng giãn dân theo hạ tầng.',
            'meta_keywords' => 'chung cư vành đai, TP HCM, hạ tầng giao thông, thị trường bất động sản, vành đai 3',
            'og_title' => $title,
            'og_description' => 'Sau một thập kỷ, số dự án chung cư dọc vành đai TP HCM tăng gấp 3,2 lần.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767621088/djuong-vanh-djai-3-giua-khu-dan-cu-o-tp-hcm_qk4m4j.webp',
            'twitter_card' => 'summary_large_image',
            'robots_index' => true,
            'robots_follow' => true,
            'robots_advanced' => null,
            'schema_type' => 'Article',
            'schema_json' => json_encode($schemaJson, JSON_UNESCAPED_UNICODE),
            'hreflangs' => json_encode([['lang' => 'vi', 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug]], JSON_UNESCAPED_UNICODE),
            'breadcrumbs' => json_encode($breadcrumbs, JSON_UNESCAPED_UNICODE),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $marketType = DB::table('post_types')->where('code', 'market')->first();
        if (!$marketType) {
            $marketTypeId = DB::table('post_types')->insertGetId(['code' => 'market', 'name' => 'Thị trường']);
        } else {
            $marketTypeId = $marketType->id;
        }
        DB::table('post_post_types')->insert(['post_id' => $postId, 'post_type_id' => $marketTypeId]);

        $tagCodes = ['thi-truong-bat-dong-san', 'tp-hcm', 'chung-cu', 'vanh-dai'];
        $tagNames = ['thi-truong-bat-dong-san' => 'Thị trường bất động sản', 'tp-hcm' => 'TP HCM', 'chung-cu' => 'Chung cư', 'vanh-dai' => 'Vành đai'];
        foreach ($tagCodes as $tagCode) {
            $existingTag = DB::table('tags')->where('code', $tagCode)->first();
            if (!$existingTag) {
                DB::table('tags')->insert(['code' => $tagCode, 'name' => $tagNames[$tagCode]]);
            }
        }
        $tags = DB::table('tags')->whereIn('code', $tagCodes)->get();
        foreach ($tags as $tag) {
            DB::table('post_tags')->insert(['post_id' => $postId, 'tag_id' => $tag->id]);
        }
        $this->command->info("Created post: {$title}");
    }
}
