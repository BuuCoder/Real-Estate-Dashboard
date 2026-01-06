<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TaiDinhCuTaiChoPostSeeder extends Seeder
{
    public function run(): void
    {
        $this->createTaiDinhCuTaiChoPost();
    }

    private function createTaiDinhCuTaiChoPost(): void
    {
        $title = 'TP. Hồ Chí Minh đề xuất người dân bị thu hồi đất để xây khu đô thị được tái định cư tại chỗ';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2026-01-06 11:16:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Chính sách
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">TP. Hồ Chí Minh đề xuất người dân bị thu hồi đất để xây khu đô thị được tái định cư tại chỗ</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            TP. Hồ Chí Minh đang đề xuất chính sách tái định cư tại chỗ cho người dân có đất bị thu hồi, nhằm bảo vệ quyền lợi của người dân và đẩy nhanh tiến độ triển khai các dự án khu đô thị.
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
                <p class="text-xs font-medium text-emerald-700">Địa phương</p>
            </div>
            <p class="text-sm text-emerald-950">TP. Hồ Chí Minh</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Cơ quan chủ trì</p>
            </div>
            <p class="text-sm text-emerald-950">Sở NN&MT TP.HCM</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Hỗ trợ tối đa</p>
            </div>
            <p class="text-sm text-emerald-950">24 triệu đồng/tháng</p>
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
            <span class="text-xs text-emerald-700">Nguồn: VnEconomy</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767674051/TP._H%E1%BB%93_Ch%C3%AD_Minh_s%E1%BA%BD_t%C3%A1i_%C4%91%E1%BB%8Bnh_c%C6%B0_xvpo3t.jpg" alt="TP. Hồ Chí Minh tái định cư tại chỗ cho người dân có đất bị thu hồi" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">TP. Hồ Chí Minh sẽ tái định cư tại chỗ cho người dân có đất bị thu hồi trong các khu đô thị.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Theo dự thảo quy định mới do Sở Nông nghiệp và Môi trường TP. Hồ Chí Minh chủ trì, người dân có đất ở bị thu hồi để thực hiện các dự án khu đô thị sẽ được xem xét bố trí tái định cư ngay trong phạm vi dự án. Điều này phù hợp với quy định của Luật Đất đai và giúp người dân tiếp tục sinh sống trong khu vực quen thuộc.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Lợi ích của chính sách tái định cư tại chỗ</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• Hạn chế xáo trộn về sinh kế, học tập và các mối quan hệ xã hội</li>
                    <li>• Bảo vệ quyền lợi chính đáng của người dân</li>
                    <li>• Tháo gỡ vướng mắc trong công tác giải phóng mặt bằng</li>
                    <li>• Đẩy nhanh tiến độ triển khai các dự án khu đô thị</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Hỗ trợ chi phí thuê nhà trong thời gian chờ tái định cư</h2>

            <p>Người dân bị thu hồi đất còn được hỗ trợ chi phí thuê nhà trong thời gian chờ sắp xếp nơi ở mới, với hai phương án: bố trí chỗ ở tạm trong quỹ nhà thuộc sở hữu nhà nước hoặc hỗ trợ bằng tiền thuê nhà.</p>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Khu vực 1 - Các quận nội thành và TP Thủ Đức</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• Hộ từ 4 nhân khẩu trở xuống: <strong>8 triệu đồng/hộ/tháng</strong></li>
                    <li>• Hộ từ 5 nhân khẩu trở lên: <strong>2 triệu đồng/người/tháng</strong>, tối đa 24 triệu đồng/hộ/tháng</li>
                </ul>
            </div>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Khu vực 2 - Thị trấn và khu vực đô thị hóa các huyện</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• Hộ từ 4 nhân khẩu trở xuống: <strong>7 triệu đồng/hộ/tháng</strong></li>
                    <li>• Hộ từ 5 nhân khẩu trở lên: <strong>1,75 triệu đồng/người/tháng</strong>, tối đa 21 triệu đồng/hộ/tháng</li>
                </ul>
            </div>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Khu vực 3 - Các xã thuộc các huyện</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• Hộ từ 4 nhân khẩu trở xuống: <strong>6 triệu đồng/hộ/tháng</strong></li>
                    <li>• Hộ từ 5 nhân khẩu trở lên: <strong>1,5 triệu đồng/người/tháng</strong>, tối đa 18 triệu đồng/hộ/tháng</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Mức hỗ trợ cho các địa bàn lân cận</h2>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Bình Dương và Bà Rịa - Vũng Tàu</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Các thành phố Bình Dương:</strong> Tương tự Khu vực 2 (7 triệu đồng/hộ/tháng)</li>
                    <li>• <strong>Các huyện Bình Dương, phường Bà Rịa - Vũng Tàu:</strong> 6 triệu đồng/hộ/tháng</li>
                    <li>• <strong>Các xã Bà Rịa - Vũng Tàu:</strong> 4 triệu đồng/hộ/tháng, tối đa 12 triệu đồng/hộ/tháng</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Thời gian hỗ trợ tạm cư</h2>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-gray-800">Quy định về thời gian</h3>
                </div>
                <ul class="list-none space-y-2 text-gray-900">
                    <li>• Tính từ thời điểm bàn giao mặt bằng đến khi nhận nhà hoặc đất tái định cư</li>
                    <li>• Tái định cư bằng nền đất: được hỗ trợ thêm thời gian chờ xây dựng nhà</li>
                    <li>• Bàn giao mặt bằng sớm: được xem xét hỗ trợ phù hợp</li>
                    <li>• Bị ảnh hưởng bởi tiến độ thi công: được xem xét hỗ trợ bổ sung</li>
                </ul>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Ý nghĩa của chính sách</h3>
                </div>
                <p class="text-blue-900">Chính sách tái định cư tại chỗ của TP. Hồ Chí Minh không chỉ bảo đảm quyền lợi chính đáng của người dân mà còn hướng tới mục tiêu phát triển đô thị bền vững, hài hòa lợi ích giữa nhà nước, nhà đầu tư và người dân. Đây là bước tiến quan trọng trong việc xây dựng thành phố hiện đại, văn minh và đáng sống.</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://vneconomy.vn/tp-ho-chi-minh-de-xuat-nguoi-dan-bi-thu-hoi-dat-de-xay-khu-do-thi-duoc-tai-dinh-cu-tai-cho.htm" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">VnEconomy</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'TP. Hồ Chí Minh đề xuất chính sách tái định cư tại chỗ cho người dân có đất bị thu hồi để xây dựng khu đô thị.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767674051/TP._H%E1%BB%93_Ch%C3%AD_Minh_s%E1%BA%BD_t%C3%A1i_%C4%91%E1%BB%8Bnh_c%C6%B0_xvpo3t.jpg',
            'datePublished' => '2026-01-06T11:16:00+07:00',
            'dateModified' => '2026-01-06T11:16:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'VnEconomy'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'tái định cư tại chỗ, TP Hồ Chí Minh, thu hồi đất, khu đô thị, hỗ trợ tạm cư',
            'articleSection' => 'Chính sách',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Chính sách', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=policy'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'TP. Hồ Chí Minh đang đề xuất chính sách tái định cư tại chỗ cho người dân có đất bị thu hồi, nhằm bảo vệ quyền lợi của người dân và đẩy nhanh tiến độ triển khai các dự án khu đô thị.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767674051/TP._H%E1%BB%93_Ch%C3%AD_Minh_s%E1%BA%BD_t%C3%A1i_%C4%91%E1%BB%8Bnh_c%C6%B0_xvpo3t.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'TP.HCM đề xuất tái định cư tại chỗ cho người dân bị thu hồi đất | Phát Đạt Bất Động Sản',
            'meta_description' => 'TP. Hồ Chí Minh đề xuất chính sách tái định cư tại chỗ cho người dân có đất bị thu hồi để xây khu đô thị, hỗ trợ tiền thuê nhà lên đến 24 triệu đồng/tháng.',
            'meta_keywords' => 'tái định cư tại chỗ, TP Hồ Chí Minh, thu hồi đất, khu đô thị, hỗ trợ tạm cư, giải phóng mặt bằng',
            'og_title' => $title,
            'og_description' => 'TP. Hồ Chí Minh đề xuất chính sách tái định cư tại chỗ cho người dân có đất bị thu hồi để xây dựng khu đô thị.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767674051/TP._H%E1%BB%93_Ch%C3%AD_Minh_s%E1%BA%BD_t%C3%A1i_%C4%91%E1%BB%8Bnh_c%C6%B0_xvpo3t.jpg',
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

        // Link to post type (policy - Chính sách)
        $policyType = DB::table('post_types')->where('code', 'policy')->first();
        if (!$policyType) {
            $policyTypeId = DB::table('post_types')->insertGetId([
                'code' => 'policy',
                'name' => 'Chính sách',
            ]);
        } else {
            $policyTypeId = $policyType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $policyTypeId,
        ]);

        // Link to tags
        $tagCodes = ['chinh-sach', 'tai-dinh-cu', 'tp-ho-chi-minh', 'thu-hoi-dat'];
        $tagNames = [
            'chinh-sach' => 'Chính sách',
            'tai-dinh-cu' => 'Tái định cư',
            'tp-ho-chi-minh' => 'TP. Hồ Chí Minh',
            'thu-hoi-dat' => 'Thu hồi đất'
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
