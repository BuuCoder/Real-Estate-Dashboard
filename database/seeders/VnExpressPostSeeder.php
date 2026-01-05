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
        $this->createGiaiNganVonNhonTrachPost();
    }

    private function createGiaiNganVonNhonTrachPost(): void
    {
        $title = 'Tăng tốc giải ngân vốn phục vụ giải phóng mặt bằng các dự án lớn tại Nhơn Trạch';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-06-05 10:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Tin tức
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Tăng tốc giải ngân vốn phục vụ giải phóng mặt bằng các dự án lớn tại Nhơn Trạch</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Huyện Nhơn Trạch đang tăng tốc giải ngân nguồn vốn đầu tư công bố trí cho công tác giải phóng mặt bằng tại các dự án lớn trên địa bàn. Từ đó, góp phần thúc đẩy tiến độ chung trong công tác giải ngân vốn đầu tư công trên địa bàn huyện.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Tổng vốn đầu tư công</p>
            </div>
            <p class="text-sm text-emerald-950">Hơn 2,3 ngàn tỷ đồng</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Vốn GPMB</p>
            </div>
            <p class="text-sm text-emerald-950">Hơn 2,1 ngàn tỷ đồng</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Dự kiến giải ngân</p>
            </div>
            <p class="text-sm text-emerald-950">960 tỷ đồng (cuối T6/2025)</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh dự án</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: Báo Đồng Nai</span>
        </div>
        <div class="mt-4 grid gap-4 sm:grid-cols-2" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618765/nang-cap-duong_uq6frc.jpg" alt="Thi công nâng cấp đường tỉnh 25B" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Thi công Dự án Nâng cấp đường tỉnh 25B, đoạn từ trung tâm huyện Nhơn Trạch ra quốc lộ 51. Ảnh: Phạm Tùng</figcaption>
            </figure>
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618761/nang-cap-duong-2_uvrfjc.jpg" alt="Thi công nâng cấp đường tỉnh 25B" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Thi công Dự án Nâng cấp đường tỉnh 25B, đoạn từ trung tâm huyện Nhơn Trạch ra quốc lộ 51. Ảnh: Phạm Tùng</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Năm 2025, Nhơn Trạch là một trong những địa phương có tổng vốn đầu tư công lớn trên địa bàn tỉnh Đồng Nai.</p>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Cuối tháng 6 sẽ giải ngân gần 1 ngàn tỷ đồng</h2>

            <p>Năm 2025, tổng vốn đầu tư công do UBND tỉnh giao chỉ tiêu kế hoạch đối với các dự án trên địa bàn huyện Nhơn Trạch là hơn 2,3 ngàn tỷ đồng. Trong đó, riêng công tác giải phóng mặt bằng, nguồn vốn được bố trí là hơn 2,1 ngàn tỷ đồng.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Các dự án lớn được bố trí vốn GPMB</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• Đường liên cảng huyện Nhơn Trạch</li>
                    <li>• Đường vào Khu công nghiệp Ông Kèo</li>
                    <li>• Dự án Nâng cấp, xây dựng đường tỉnh 25B, 25C</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Dự án Đường liên cảng huyện Nhơn Trạch</h2>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Thông tin vốn đầu tư</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Tổng nguồn vốn năm 2025:</strong> Khoảng 1,5 ngàn tỷ đồng</li>
                    <li>• <strong>Vốn ngân sách trung ương (xây lắp):</strong> Khoảng 1,4 ngàn tỷ đồng</li>
                    <li>• <strong>Vốn ngân sách tỉnh (GPMB):</strong> Khoảng 100 tỷ đồng</li>
                    <li>• <strong>Tiến độ:</strong> Đã hoàn thành phê duyệt phương án bồi thường, hỗ trợ</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Dự án Đường vào Khu công nghiệp Ông Kèo</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Thông tin vốn đầu tư</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Tổng nguồn vốn năm 2025:</strong> 500 tỷ đồng</li>
                    <li>• <strong>Dự kiến giải ngân thêm (cuối T6):</strong> Khoảng 40 tỷ đồng</li>
                    <li>• <strong>Tổng giải ngân GPMB dự kiến:</strong> Khoảng 240 tỷ đồng</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Dự án Xây dựng đường tỉnh 25C</h2>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Thông tin vốn đầu tư (đoạn từ QL51 đến HL19)</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• <strong>Tổng vốn GPMB năm 2025:</strong> 260 tỷ đồng</li>
                    <li>• <strong>Dự kiến giải ngân (cuối T6/2025):</strong> Khoảng 127 tỷ đồng</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Gỡ vướng tại Dự án Đường liên cảng</h2>

            <p>Trong tổng vốn khoảng 1,5 ngàn tỷ đồng bố trí cho dự án, có 1,4 ngàn tỷ đồng nguồn vốn ngân sách trung ương bố trí cho công tác xây lắp. Hiện nay, dự án mới đang thực hiện công tác đấu thầu lựa chọn nhà thầu xây lắp.</p>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-gray-800">Kiến nghị của UBND tỉnh</h3>
                </div>
                <p class="text-gray-900">UBND tỉnh đã kiến nghị Bộ Tài chính tổng hợp, báo cáo Thủ tướng Chính phủ chấp thuận chủ trương sử dụng nguồn vốn chi tiết năm 2025 và thực hiện giải ngân nguồn vốn ngân sách trung ương hỗ trợ cho cả dự án theo tiến độ thực hiện, kể cả chi phí bồi thường giải phóng mặt bằng của dự án.</p>
            </div>

            <p>Nếu được Chính phủ chấp thuận chủ trương cho sử dụng nguồn vốn ngân sách trung ương bố trí cho dự án để thực hiện chi trả cho công tác giải phóng mặt bằng, dự kiến đến cuối tháng 6, nguồn vốn tại dự án này được giải ngân sẽ đạt khoảng 36% kế hoạch vốn năm 2025.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://baodongnai.com.vn/trang-dia-phuong/202506/tang-toc-giai-ngan-von-phuc-vu-giai-phong-mat-bang-cac-du-an-lon-ee414e9" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">Báo Đồng Nai</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Huyện Nhơn Trạch đang tăng tốc giải ngân nguồn vốn đầu tư công bố trí cho công tác giải phóng mặt bằng tại các dự án lớn trên địa bàn.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618765/nang-cap-duong_uq6frc.jpg',
            'datePublished' => '2025-06-05T10:00:00+07:00',
            'dateModified' => '2025-06-05T10:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'Báo Đồng Nai'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'Nhơn Trạch, giải phóng mặt bằng, đầu tư công, Đồng Nai, hạ tầng giao thông',
            'articleSection' => 'Tin tức',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=news'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Huyện Nhơn Trạch đang tăng tốc giải ngân nguồn vốn đầu tư công bố trí cho công tác giải phóng mặt bằng tại các dự án lớn trên địa bàn. Từ đó, góp phần thúc đẩy tiến độ chung trong công tác giải ngân vốn đầu tư công trên địa bàn huyện.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618765/nang-cap-duong_uq6frc.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Giải ngân vốn GPMB các dự án lớn tại Nhơn Trạch | Phát Đạt Bất Động Sản',
            'meta_description' => 'Nhơn Trạch tăng tốc giải ngân hơn 2,3 ngàn tỷ đồng vốn đầu tư công cho các dự án lớn: Đường liên cảng, KCN Ông Kèo, đường tỉnh 25B, 25C.',
            'meta_keywords' => 'Nhơn Trạch, giải phóng mặt bằng, đầu tư công, Đồng Nai, đường liên cảng, KCN Ông Kèo, đường tỉnh 25B, đường tỉnh 25C',
            'og_title' => $title,
            'og_description' => 'Huyện Nhơn Trạch đang tăng tốc giải ngân nguồn vốn đầu tư công bố trí cho công tác giải phóng mặt bằng tại các dự án lớn trên địa bàn.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618765/nang-cap-duong_uq6frc.jpg',
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

        // Link to post type (news - Tin tức)
        $newsType = DB::table('post_types')->where('code', 'news')->first();
        if (!$newsType) {
            $newsTypeId = DB::table('post_types')->insertGetId([
                'code' => 'news',
                'name' => 'Tin tức',
            ]);
        } else {
            $newsTypeId = $newsType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $newsTypeId,
        ]);

        // Link to tags
        $tagCodes = ['nhon-trach', 'dong-nai', 'dau-tu-cong'];
        $tagNames = [
            'nhon-trach' => 'Nhơn Trạch',
            'dong-nai' => 'Đồng Nai',
            'dau-tu-cong' => 'Đầu tư công'
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
}
