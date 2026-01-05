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
        $this->createMaDinhDanhBatDongSanPost();
    }

    private function createMaDinhDanhBatDongSanPost(): void
    {
        $title = 'Từ 1/3: Bất động sản ở Việt Nam sẽ có một thay đổi lớn chưa từng thấy';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2026-01-05 13:55:00');

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
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Từ 1/3: Bất động sản ở Việt Nam sẽ có một thay đổi lớn chưa từng thấy</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Từ ngày 1/3/2026, mỗi căn nhà, căn hộ, mỗi bất động sản ở Việt Nam sẽ được gắn một mã định danh điện tử duy nhất theo Nghị định 357 của Chính phủ.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Ngày áp dụng</p>
            </div>
            <p class="text-sm text-emerald-950">1/3/2026</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Độ dài mã</p>
            </div>
            <p class="text-sm text-emerald-950">Tối đa 40 ký tự</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Đơn vị quản lý</p>
            </div>
            <p class="text-sm text-emerald-950">Bộ Xây dựng</p>
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
            <span class="text-xs text-emerald-700">Nguồn: CafeF</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767619412/ma-djinh-danh-djien-tu-djuoc-ky-vong-se-gop-phan-djua-thi-truong-bat-djong-san-van-hanh-minh-bach-va-chuyen-nghiep-hon_ycckwp.jpg" alt="Mã định danh điện tử bất động sản" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Mã định danh điện tử được kỳ vọng sẽ góp phần đưa thị trường bất động sản vận hành minh bạch và chuyên nghiệp hơn.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Thông tin này được đề cập tới tại Nghị định 357 mới được Chính phủ ban hành về xây dựng, quản lý hệ thống thông tin, cơ sở dữ liệu về nhà ở và thị trường bất động sản.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Hệ thống quản lý thống nhất</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Bộ Xây dựng:</strong> Xây dựng, quản lý, sử dụng hệ thống trên toàn quốc</li>
                    <li>• <strong>UBND cấp tỉnh:</strong> Thu thập, cập nhật và khai thác cơ sở dữ liệu</li>
                    <li>• <strong>Sở Xây dựng:</strong> Gắn và quản lý mã định danh tại địa phương</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Mỗi bất động sản ở Việt Nam sẽ có một mã số riêng</h2>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Đặc điểm mã định danh điện tử</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Cấu trúc:</strong> Chuỗi ký tự gồm chữ và số</li>
                    <li>• <strong>Độ dài:</strong> Tối đa 40 ký tự</li>
                    <li>• <strong>Tạo lập:</strong> Tự động trên hệ thống dữ liệu quốc gia</li>
                    <li>• <strong>Tính duy nhất:</strong> Mỗi mã chỉ gắn với một sản phẩm bất động sản duy nhất</li>
                </ul>
            </div>

            <p>Đáng chú ý, mỗi mã sẽ chỉ gắn với một sản phẩm bất động sản duy nhất và theo suốt vòng đời của tài sản đó, bao gồm từ khi hình thành, đưa vào sử dụng cho đến các lần giao dịch, chuyển nhượng hay thế chấp.</p>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Cơ sở tích hợp mã định danh</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• Mã định danh thửa đất</li>
                    <li>• Mã số dự án hoặc công trình xây dựng</li>
                    <li>• Thông tin địa điểm</li>
                    <li>• Các ký tự bổ sung để bảo đảm không trùng lặp</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Thông tin được kết nối và cập nhật</h2>

            <p>Khi mã định danh được áp dụng, các thông tin liên quan đến bất động sản sẽ được kết nối và cập nhật xuyên suốt:</p>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Thông tin được liên kết</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• Tình trạng pháp lý</li>
                    <li>• Quy hoạch</li>
                    <li>• Tiến độ dự án</li>
                    <li>• Giá giao dịch</li>
                    <li>• Hợp đồng công chứng</li>
                    <li>• Lịch sử biến động</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Mã định danh cho các đối tượng khác</h2>

            <p>Bên cạnh sản phẩm bất động sản, Nghị định 357 cũng quy định về mã định danh cho:</p>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Các đối tượng được gắn mã</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• Đơn vị quản lý vận hành nhà chung cư</li>
                    <li>• Chứng chỉ hành nghề môi giới địa ốc</li>
                    <li>• Cá nhân được hưởng chính sách hỗ trợ nhà ở</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Cơ sở dữ liệu nhà và thị trường bất động sản</h2>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                    <h3 class="font-semibold text-gray-800">Thông tin trong cơ sở dữ liệu</h3>
                </div>
                <ul class="list-none space-y-2 text-gray-900">
                    <li>• Thông tin dự án: tổng mức đầu tư, quy mô sử dụng đất, tiến độ, văn bản pháp lý</li>
                    <li>• Thống kê giá mua bán (triệu đồng/m²)</li>
                    <li>• Tổng giá trị giao dịch</li>
                    <li>• Bất động sản tồn kho</li>
                    <li>• Dữ liệu giao dịch qua công chứng</li>
                    <li>• Thông tin sở hữu nhà ở của tổ chức, cá nhân</li>
                </ul>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Đánh giá của chuyên gia</h3>
                </div>
                <p class="text-blue-900">Việc gắn mã định danh điện tử cho bất động sản là bước đi quan trọng trong lộ trình số hóa lĩnh vực nhà ở và thị trường bất động sản, đồng thời phù hợp với yêu cầu quản lý trong bối cảnh quy mô thị trường ngày càng lớn, giao dịch ngày càng phức tạp.</p>
            </div>

            <p>Khi đi vào vận hành đầy đủ, mã định danh điện tử được kỳ vọng sẽ góp phần đưa thị trường bất động sản vận hành minh bạch và chuyên nghiệp hơn; cũng như góp phần minh bạch hóa giá cả và lịch sử giao dịch trên thị trường.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://cafef.vn/tu-1-3-bat-dong-san-o-viet-nam-se-co-mot-thay-doi-lon-chua-tung-thay-188260105135531455.chn" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">CafeF</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Từ ngày 1/3/2026, mỗi căn nhà, căn hộ, mỗi bất động sản ở Việt Nam sẽ được gắn một mã định danh điện tử duy nhất theo Nghị định 357.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767619412/ma-djinh-danh-djien-tu-djuoc-ky-vong-se-gop-phan-djua-thi-truong-bat-djong-san-van-hanh-minh-bach-va-chuyen-nghiep-hon_ycckwp.jpg',
            'datePublished' => '2026-01-05T13:55:00+07:00',
            'dateModified' => '2026-01-05T13:55:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'CafeF'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'mã định danh bất động sản, Nghị định 357, thị trường bất động sản, số hóa bất động sản',
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
            'summary' => 'Từ ngày 1/3/2026, mỗi căn nhà, căn hộ, mỗi bất động sản ở Việt Nam sẽ được gắn một mã định danh điện tử duy nhất theo Nghị định 357 của Chính phủ.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767619412/ma-djinh-danh-djien-tu-djuoc-ky-vong-se-gop-phan-djua-thi-truong-bat-djong-san-van-hanh-minh-bach-va-chuyen-nghiep-hon_ycckwp.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Mã định danh điện tử bất động sản từ 1/3/2026 | Phát Đạt Bất Động Sản',
            'meta_description' => 'Từ 1/3/2026, mỗi bất động sản ở Việt Nam sẽ được gắn mã định danh điện tử duy nhất theo Nghị định 357, giúp thị trường minh bạch hơn.',
            'meta_keywords' => 'mã định danh bất động sản, Nghị định 357, thị trường bất động sản, số hóa bất động sản, mã định danh điện tử',
            'og_title' => $title,
            'og_description' => 'Từ ngày 1/3/2026, mỗi căn nhà, căn hộ, mỗi bất động sản ở Việt Nam sẽ được gắn một mã định danh điện tử duy nhất.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767619412/ma-djinh-danh-djien-tu-djuoc-ky-vong-se-gop-phan-djua-thi-truong-bat-djong-san-van-hanh-minh-bach-va-chuyen-nghiep-hon_ycckwp.jpg',
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
        $tagCodes = ['thi-truong-bat-dong-san', 'chinh-sach', 'so-hoa'];
        $tagNames = [
            'thi-truong-bat-dong-san' => 'Thị trường bất động sản',
            'chinh-sach' => 'Chính sách',
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
