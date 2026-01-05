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
        $this->createDuAnDienKhiLNGPost();
    }

    private function createDuAnDienKhiLNGPost(): void
    {
        $title = 'Dự án then chốt trong vận hành chuỗi Thị Vải – Nhơn Trạch, đặt nền móng hình thành các trung tâm điện khí LNG hiện đại tại Việt Nam';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-17 16:33:00');

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
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Dự án then chốt trong vận hành chuỗi Thị Vải – Nhơn Trạch, đặt nền móng hình thành các trung tâm điện khí LNG hiện đại tại Việt Nam</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Dự án nhà máy điện Nhơn Trạch 3 và Nhơn Trạch 4 (NT3&4) là mắt xích quan trọng của chuỗi liên kết Thị Vải – Nhơn Trạch, đồng thời là minh chứng rõ nét cho năng lực của PV Power và tầm nhìn dài hạn của Petrovietnam trong phát triển điện khí LNG.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Công suất</p>
            </div>
            <p class="text-sm text-emerald-950">1.624 MW</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Sản lượng/năm</p>
            </div>
            <p class="text-sm text-emerald-950">Hơn 9 tỷ kWh</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Vốn vay</p>
            </div>
            <p class="text-sm text-emerald-950">Gần 1 tỷ USD</p>
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
            <span class="text-xs text-emerald-700">Nguồn: CafeF</span>
        </div>
        <div class="mt-4 grid gap-4 sm:grid-cols-2" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618489/thi-vai-nhon-trach_us8wci.webp" alt="Chuỗi Thị Vải - Nhơn Trạch" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Chuỗi liên kết khí – điện LNG Thị Vải – Nhơn Trạch</figcaption>
            </figure>
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618617/D%E1%BB%B1_%C3%A1n_NMD_NT3_4_wfrmtt.jpg" alt="Dự án NMD NT3&4" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Dự án Nhà máy điện Nhơn Trạch 3 và Nhơn Trạch 4</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Mô hình liên kết hoàn chỉnh đầu tiên của Việt Nam</h2>

            <p>Chuỗi Thị Vải – Nhơn Trạch là mô hình liên kết khí – điện LNG hiện đại, được xây dựng đồng bộ từ khâu tiếp nhận, lưu trữ và tái tạo hóa khí tại Kho cảng LNG Thị Vải, đến vận chuyển khí và phát điện tại trung tâm Nhơn Trạch.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Thông số dự án NT3&4</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Chủ đầu tư:</strong> Tổng công ty Điện lực Dầu khí Việt Nam (PV Power)</li>
                    <li>• <strong>Công suất:</strong> 1.624 MW</li>
                    <li>• <strong>Sản lượng dự kiến:</strong> Hơn 9 tỷ kWh/năm</li>
                    <li>• <strong>Vai trò:</strong> Mắt xích quyết định hiệu quả của toàn chuỗi LNG</li>
                </ul>
            </div>

            <p>Trong cấu trúc liên kết ấy, NT3&4 do Tổng công ty Điện lực Dầu khí Việt Nam (PV Power) làm chủ đầu tư, giữ vai trò then chốt, là nơi dòng LNG được chuyển hóa thành điện năng hiệu suất cao, đóng góp trực tiếp vào hệ thống điện quốc gia.</p>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Ý nghĩa của mô hình</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• Đảm bảo tính ổn định, linh hoạt trong vận hành</li>
                    <li>• Tạo mô hình mẫu cho các trung tâm điện khí LNG tương lai</li>
                    <li>• Công nghệ vận hành, hiệu suất phát điện và độ tin cậy cao</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">PV Power khẳng định vai trò làm chủ dự án</h2>

            <p>Việc PV Power đảm nhận dự án LNG đầu tiên của Việt Nam đã đánh dấu sự trưởng thành của doanh nghiệp từ vai trò vận hành các nhà máy điện truyền thống, sang làm chủ công nghệ tuabin khí thế hệ mới.</p>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Năng lực PV Power</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• Làm chủ công nghệ tuabin khí thế hệ mới</li>
                    <li>• Hệ thống điều khiển, vận hành chu trình hỗn hợp hiện đại</li>
                    <li>• Đáp ứng tiêu chuẩn môi trường – an toàn – xã hội theo chuẩn quốc tế</li>
                    <li>• Thu xếp gần 1 tỷ USD vốn vay nước ngoài không có bảo lãnh Chính phủ</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Đóng góp cho hệ thống điện quốc gia</h2>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Lợi ích dự án mang lại</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Tăng cường nguồn điện nền ổn định:</strong> Bổ sung hơn 9 tỷ kWh mỗi năm cho hệ thống</li>
                    <li>• <strong>Giảm áp lực phụ tải:</strong> Hỗ trợ khu vực Nam Bộ</li>
                    <li>• <strong>Cắt giảm phát thải CO₂:</strong> Nhờ hiệu suất cao và sử dụng nhiên liệu sạch</li>
                    <li>• <strong>Mở ra thị trường LNG Việt Nam:</strong> Tạo động lực thu hút đầu tư</li>
                </ul>
            </div>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Tầm nhìn tương lai</h3>
                </div>
                <p class="text-purple-900">Nhờ vị trí trung tâm trong chuỗi LNG Thị Vải – Nhơn Trạch, NT3&4 trở thành biểu tượng của bước chuyển chiến lược trong ngành năng lượng Việt Nam. Dự án không chỉ bổ sung nguồn điện mới hiệu quả mà còn mở ra nền tảng quan trọng cho kỷ nguyên điện khí LNG của Việt Nam, đóng góp thiết thực vào bảo đảm an ninh năng lượng và thúc đẩy tiến trình chuyển dịch năng lượng xanh – sạch – bền vững.</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://cafef.vn/du-an-then-chot-trong-van-hanh-chuoi-thi-vai-nhon-trach-dat-nen-mong-hinh-thanh-cac-trung-tam-dien-khi-lng-hien-dai-tai-viet-nam-188251217163319184.chn" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">CafeF</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Dự án nhà máy điện Nhơn Trạch 3 và Nhơn Trạch 4 là mắt xích quan trọng của chuỗi liên kết Thị Vải – Nhơn Trạch trong phát triển điện khí LNG.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618489/thi-vai-nhon-trach_us8wci.webp',
            'datePublished' => '2025-12-17T16:33:00+07:00',
            'dateModified' => '2025-12-17T16:33:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'CafeF'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'điện khí LNG, Nhơn Trạch, PV Power, Petrovietnam, năng lượng sạch',
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
            'summary' => 'Dự án nhà máy điện Nhơn Trạch 3 và Nhơn Trạch 4 (NT3&4) là mắt xích quan trọng của chuỗi liên kết Thị Vải – Nhơn Trạch, đồng thời là minh chứng rõ nét cho năng lực của PV Power và tầm nhìn dài hạn của Petrovietnam trong phát triển điện khí LNG.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618489/thi-vai-nhon-trach_us8wci.webp',
            'reading_minutes' => 4,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Dự án điện khí LNG Thị Vải – Nhơn Trạch | Phát Đạt Bất Động Sản',
            'meta_description' => 'Dự án nhà máy điện Nhơn Trạch 3 và 4 công suất 1.624MW, sản lượng hơn 9 tỷ kWh/năm - mắt xích quan trọng trong chuỗi điện khí LNG Việt Nam.',
            'meta_keywords' => 'điện khí LNG, Nhơn Trạch 3, Nhơn Trạch 4, PV Power, Petrovietnam, năng lượng sạch, Thị Vải',
            'og_title' => $title,
            'og_description' => 'Dự án nhà máy điện Nhơn Trạch 3 và Nhơn Trạch 4 là mắt xích quan trọng của chuỗi liên kết Thị Vải – Nhơn Trạch trong phát triển điện khí LNG.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767618489/thi-vai-nhon-trach_us8wci.webp',
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
        $tagCodes = ['nang-luong', 'dien-khi-lng', 'pv-power'];
        $tagNames = [
            'nang-luong' => 'Năng lượng',
            'dien-khi-lng' => 'Điện khí LNG',
            'pv-power' => 'PV Power'
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
