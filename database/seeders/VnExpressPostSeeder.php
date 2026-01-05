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
        $this->createCauPhuMy2VaCauCanGioPost();
    }


    private function createCauPhuMy2VaCauCanGioPost(): void
    {
        $title = 'TP HCM xây cầu Phú Mỹ 2 và Cầu Cần Giờ hơn 36.000 tỷ đồng';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-26 18:00:00');

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
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">TP HCM xây cầu Phú Mỹ 2 và Cầu Cần Giờ hơn 36.000 tỷ đồng</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Hai dự án cầu Phú Mỹ 2 vốn hơn 23.000 tỷ đồng và Cần Giờ hơn 13.000 tỷ đầu tư theo hợp đồng BT, dự kiến khởi công đầu năm sau, hình thành các trục giao thông mới.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Tổng vốn đầu tư</p>
            </div>
            <p class="text-sm text-emerald-950">36.387 tỷ đồng</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Khởi công</p>
            </div>
            <p class="text-sm text-emerald-950">Đầu năm 2026</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Khu vực</p>
            </div>
            <p class="text-sm text-emerald-950">Nam Sài Gòn - Cần Giờ</p>
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
            <span class="text-xs text-emerald-700">Nguồn: VnExpress</span>
        </div>
        <div class="mt-4 grid gap-4 sm:grid-cols-2" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618220/Cau-Phu-My-2-1766718093-7499-1766743410_pogctx.webp" alt="Vị trí cầu Phú Mỹ 2" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Vị trí các cây cầu kết nối TP HCM và Đồng Nai sắp tới sẽ xây dựng, trong đó có Phú Mỹ 2. Đồ họa: Khánh Hoàng</figcaption>
            </figure>
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618218/8593-5682-1764832830-jpeg-1766-9024-3537-1766743411_evojy7.webp" alt="Phối cảnh cầu Cần Giờ" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Phối cảnh dự án cầu Cần Giờ. Ảnh: Sở Quy hoạch và Kiến trúc</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Nội dung nêu trong hai nghị quyết vừa được HĐND TP HCM thông qua tại kỳ họp chuyên đề chiều 26/12.</p>
            
            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Cầu Phú Mỹ 2 - Kết nối TP HCM và Đồng Nai</h2>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Thông số kỹ thuật cầu Phú Mỹ 2</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Chiều dài:</strong> 6,3 km</li>
                    <li>• <strong>Điểm đầu:</strong> Giao với đường Nguyễn Hữu Thọ qua các phường Phú Thuận, Tân Mỹ, xã Nhà Bè</li>
                    <li>• <strong>Điểm cuối:</strong> Xã Đại Phước (Đồng Nai)</li>
                    <li>• <strong>Quy mô:</strong> 8 làn xe (6 làn ôtô và 2 làn hỗn hợp)</li>
                    <li>• <strong>Tổng vốn:</strong> 23.186 tỷ đồng</li>
                </ul>
            </div>

            <p>Để thực hiện dự án, hai địa phương dự kiến thu hồi khoảng 29,4 ha đất (TP HCM 17,5 ha và Đồng Nai 11,9 ha).</p>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Cơ cấu vốn cầu Phú Mỹ 2</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Chi phí xây dựng và thiết bị:</strong> 12.336 tỷ đồng</li>
                    <li>• <strong>Bồi thường, giải phóng mặt bằng:</strong> 4.365 tỷ đồng</li>
                    <li>• <strong>Thanh toán bằng quỹ đất:</strong> 15.083 tỷ đồng</li>
                    <li>• <strong>Ngân sách thành phố:</strong> 5.807 tỷ đồng</li>
                </ul>
            </div>

            <p>Dự án được đề xuất đầu tư theo phương thức đối tác công tư (PPP), loại hợp đồng Xây dựng - Chuyển giao (BT). Việc thanh toán dự kiến thực hiện trong vòng 3 năm sau khi công trình hoàn thành, bàn giao.</p>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Lợi ích cầu Phú Mỹ 2</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• Hình thành trục giao thông mới liên kết trực tiếp trung tâm TP HCM và hai sân bay Tân Sơn Nhất, Long Thành</li>
                    <li>• Giảm tải cho cầu Phú Mỹ hiện hữu, quốc lộ 1, 51 và cao tốc TP HCM - Long Thành</li>
                    <li>• Giải quyết bài toán ùn tắc, giảm chi phí vận tải</li>
                    <li>• Thúc đẩy kinh tế - xã hội khu vực Nam Sài Gòn</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Cầu Cần Giờ - Thay thế phà Bình Khánh</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Thông số kỹ thuật cầu Cần Giờ</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Cầu chính:</strong> Dài gần 3 km vượt sông Soài Rạp</li>
                    <li>• <strong>Đường dẫn:</strong> Hơn 3,3 km cùng các cầu nhỏ vượt Sông Chà, Tắc Sông Chà, rạch Mương Ngang</li>
                    <li>• <strong>Quy mô:</strong> 6 làn xe (4 làn cơ giới, 2 làn hỗn hợp)</li>
                    <li>• <strong>Vận tốc thiết kế:</strong> 80 km/h</li>
                    <li>• <strong>Tổng vốn:</strong> 13.201 tỷ đồng</li>
                </ul>
            </div>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Cơ cấu vốn cầu Cần Giờ</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• <strong>Vốn nhà đầu tư:</strong> 9.773 tỷ đồng (vốn chủ sở hữu và vốn vay)</li>
                    <li>• <strong>Ngân sách thành phố:</strong> 3.428 tỷ đồng (bồi thường, giải phóng mặt bằng và hỗ trợ xây dựng hạ tầng)</li>
                    <li>• <strong>Thanh toán:</strong> Bằng quỹ đất, thời hạn khoảng 5 năm</li>
                </ul>
            </div>

            <p>Dự án được tách hai thành phần: bồi thường, hỗ trợ tái định cư bằng vốn đầu tư công; và xây dựng cầu theo phương thức PPP, hợp đồng Xây dựng - Chuyển giao (BT).</p>

            <p>Khi đưa vào khai thác, cầu Cần Giờ sẽ thay thế phà Bình Khánh, tạo kết nối trực tiếp, thúc đẩy du lịch và phát triển kinh tế - xã hội cho khu vực trong bối cảnh địa phương đang triển khai dự án khu đô thị biển.</p>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-gray-800">Tiến độ triển khai</h3>
                </div>
                <p class="text-gray-900">Trước đó, hai dự án có nhiều nhà đầu tư đề xuất tham gia theo hợp đồng BT. Sau khi chủ trương được HĐND thông qua, UBND thành phố sẽ phê duyệt dự án và chọn nhà đầu tư.</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://vnexpress.net/xay-cau-phu-my-2-va-cau-can-gio-4998521.html" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">VnExpress</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Hai dự án cầu Phú Mỹ 2 vốn hơn 23.000 tỷ đồng và Cần Giờ hơn 13.000 tỷ đầu tư theo hợp đồng BT, dự kiến khởi công đầu năm sau.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618218/8593-5682-1764832830-jpeg-1766-9024-3537-1766743411_evojy7.webp',
            'datePublished' => '2025-12-26T18:00:00+07:00',
            'dateModified' => '2025-12-26T18:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'VnExpress'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'cầu Phú Mỹ 2, cầu Cần Giờ, TP HCM, hạ tầng giao thông, đầu tư BT',
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
            'summary' => 'Hai dự án cầu Phú Mỹ 2 vốn hơn 23.000 tỷ đồng và Cần Giờ hơn 13.000 tỷ đầu tư theo hợp đồng BT, dự kiến khởi công đầu năm sau, hình thành các trục giao thông mới.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618218/8593-5682-1764832830-jpeg-1766-9024-3537-1766743411_evojy7.webp',
            'reading_minutes' => 4,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'TP HCM xây cầu Phú Mỹ 2 và Cầu Cần Giờ hơn 36.000 tỷ đồng. Dự kiến khởi công đầu năm 2026, hình thành trục giao thông mới.',
            'meta_keywords' => 'cầu Phú Mỹ 2, cầu Cần Giờ, TP HCM, hạ tầng giao thông, đầu tư BT, Nam Sài Gòn',
            'og_title' => $title,
            'og_description' => 'Hai dự án cầu Phú Mỹ 2 vốn hơn 23.000 tỷ đồng và Cần Giờ hơn 13.000 tỷ đầu tư theo hợp đồng BT, dự kiến khởi công đầu năm sau.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618218/8593-5682-1764832830-jpeg-1766-9024-3537-1766743411_evojy7.webp',
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
        $tagCodes = ['ha-tang-giao-thong', 'tp-hcm', 'du-an-cau'];
        $tagNames = [
            'ha-tang-giao-thong' => 'Hạ tầng giao thông',
            'tp-hcm' => 'TP HCM',
            'du-an-cau' => 'Dự án cầu'
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
