<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NghiDinh357PostSeeder extends Seeder
{
    public function run(): void
    {
        $this->createNghiDinh357Post();
    }

    private function createNghiDinh357Post(): void
    {
        $title = 'Xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2026-01-05 11:15:00');

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
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Chính phủ vừa ban hành Nghị định số 357/2025/NĐ-CP quy định về xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Nghị định</p>
            </div>
            <p class="text-sm text-emerald-950">357/2025/NĐ-CP</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Cơ quan quản lý</p>
            </div>
            <p class="text-sm text-emerald-950">Bộ Xây dựng</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Phạm vi</p>
            </div>
            <p class="text-sm text-emerald-950">Toàn quốc</p>
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
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767670566/xay-dung-va-quan-ly-he-thong-thong-tin-co-so-du-lieu-ve-nha-o-va-thi-truong-bat-dong-san_kb16jq.jpg" alt="Hệ thống thông tin cơ sở dữ liệu nhà ở và thị trường bất động sản" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản được xây dựng và quản lý tập trung, thống nhất từ trung ương đến địa phương.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Nghị định số 357/2025/NĐ-CP nêu rõ hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản được xây dựng và quản lý tập trung, thống nhất từ trung ương đến địa phương.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Phân cấp quản lý hệ thống</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Bộ Xây dựng:</strong> Xây dựng, quản lý, sử dụng hệ thống trên phạm vi toàn quốc</li>
                    <li>• <strong>UBND cấp tỉnh:</strong> Thu thập, cập nhật, quản lý, khai thác cơ sở dữ liệu trong phạm vi địa phương</li>
                    <li>• <strong>Cơ quan, tổ chức, cá nhân:</strong> Được cấp quyền truy cập để khởi tạo, chia sẻ, cập nhật thông tin theo phân quyền</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Nguyên tắc xây dựng hệ thống</h2>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Yêu cầu kỹ thuật</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• Tính mở và tiêu chuẩn, quy chuẩn về cơ sở dữ liệu, API, mô hình phân quyền</li>
                    <li>• Đáp ứng quy định theo khung kiến trúc dữ liệu quốc gia</li>
                    <li>• Tuân thủ các tiêu chuẩn an ninh bảo mật</li>
                    <li>• Kết nối, chia sẻ dữ liệu với Cơ sở dữ liệu tổng hợp quốc gia</li>
                    <li>• Dữ liệu đã có trong các cơ sở dữ liệu được kết nối thì không thu thập lại</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Cơ sở dữ liệu nhà ở</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Các loại hình nhà ở được quản lý</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• Nhà ở thương mại</li>
                    <li>• Nhà ở xã hội, nhà lưu trú công nhân trong khu công nghiệp</li>
                    <li>• Nhà ở cho lực lượng vũ trang nhân dân</li>
                    <li>• Nhà ở công vụ</li>
                    <li>• Nhà ở phục vụ tái định cư</li>
                    <li>• Cải tạo, xây dựng lại nhà chung cư</li>
                    <li>• Nhà ở hỗn hợp, nhà ở thuộc tài sản công</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Cơ sở dữ liệu bất động sản</h2>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Các loại dự án bất động sản</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• Dự án đầu tư xây dựng nhà ở</li>
                    <li>• Dự án đầu tư xây dựng khu đô thị</li>
                    <li>• Dự án đầu tư xây dựng khu dân cư nông thôn</li>
                    <li>• Dự án công trình phục vụ giáo dục, y tế, thể thao, văn hóa, thương mại, du lịch</li>
                    <li>• Dự án kết cấu hạ tầng khu công nghiệp, cụm công nghiệp, khu công nghệ cao</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Thông tin về tổ chức kinh doanh dịch vụ bất động sản</h2>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Đối tượng được quản lý thông tin</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• Sàn giao dịch bất động sản</li>
                    <li>• Tổ chức kinh doanh dịch vụ môi giới bất động sản</li>
                    <li>• Tổ chức kinh doanh dịch vụ tư vấn, quản lý bất động sản</li>
                    <li>• Cá nhân được cấp chứng chỉ hành nghề môi giới bất động sản (bao gồm số định danh cá nhân, mã định danh điện tử chứng chỉ)</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Hình thức khai thác, sử dụng thông tin</h2>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <h3 class="font-semibold text-gray-800">Ba hình thức khai thác</h3>
                </div>
                <ul class="list-none space-y-2 text-gray-900">
                    <li>• Khai thác trực tiếp thông qua Cổng thông tin của hệ thống</li>
                    <li>• Khai thác qua kết nối, chia sẻ dữ liệu trực tuyến giữa các hệ thống thông tin</li>
                    <li>• Khai thác qua việc gửi văn bản đến cơ quan có thẩm quyền</li>
                </ul>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Ý nghĩa của Nghị định</h3>
                </div>
                <p class="text-blue-900">Nghị định 357/2025/NĐ-CP đánh dấu bước tiến quan trọng trong việc số hóa và minh bạch hóa thị trường bất động sản Việt Nam. Hệ thống cơ sở dữ liệu tập trung sẽ giúp quản lý hiệu quả hơn, đồng thời tạo điều kiện thuận lợi cho người dân và doanh nghiệp trong việc tra cứu, giao dịch bất động sản.</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://vneconomy.vn/xay-dung-va-quan-ly-he-thong-thong-tin-co-so-du-lieu-ve-nha-o-va-thi-truong-bat-dong-san.htm" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">VnEconomy</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Chính phủ ban hành Nghị định 357/2025/NĐ-CP quy định về xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767670566/xay-dung-va-quan-ly-he-thong-thong-tin-co-so-du-lieu-ve-nha-o-va-thi-truong-bat-dong-san_kb16jq.jpg',
            'datePublished' => '2026-01-05T11:15:00+07:00',
            'dateModified' => '2026-01-05T11:15:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'VnEconomy'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'Nghị định 357, cơ sở dữ liệu bất động sản, hệ thống thông tin nhà ở, Bộ Xây dựng',
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
            'summary' => 'Chính phủ vừa ban hành Nghị định số 357/2025/NĐ-CP quy định về xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản, tạo nền tảng số hóa cho thị trường.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767670566/xay-dung-va-quan-ly-he-thong-thong-tin-co-so-du-lieu-ve-nha-o-va-thi-truong-bat-dong-san_kb16jq.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Nghị định 357/2025 về hệ thống thông tin cơ sở dữ liệu nhà ở và bất động sản | Phát Đạt Bất Động Sản',
            'meta_description' => 'Nghị định 357/2025/NĐ-CP quy định xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản trên toàn quốc.',
            'meta_keywords' => 'Nghị định 357, cơ sở dữ liệu bất động sản, hệ thống thông tin nhà ở, Bộ Xây dựng, số hóa bất động sản',
            'og_title' => $title,
            'og_description' => 'Chính phủ ban hành Nghị định 357/2025/NĐ-CP quy định về xây dựng và quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767670566/xay-dung-va-quan-ly-he-thong-thong-tin-co-so-du-lieu-ve-nha-o-va-thi-truong-bat-dong-san_kb16jq.jpg',
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
        $tagCodes = ['chinh-sach', 'co-so-du-lieu', 'bo-xay-dung', 'so-hoa'];
        $tagNames = [
            'chinh-sach' => 'Chính sách',
            'co-so-du-lieu' => 'Cơ sở dữ liệu',
            'bo-xay-dung' => 'Bộ Xây dựng',
            'so-hoa' => 'Số hóa'
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
