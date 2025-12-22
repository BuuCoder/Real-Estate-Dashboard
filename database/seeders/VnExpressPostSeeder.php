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
        $this->createGiayToChungMinhThuNhapNOXHPost();
    }

    private function createGiayToChungMinhThuNhapNOXHPost(): void
    {
        $title = 'Giấy tờ chứng minh về thu nhập để mua nhà ở xã hội';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-22 11:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Kiến thức
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Giấy tờ chứng minh về thu nhập để mua nhà ở xã hội</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Hướng dẫn chi tiết các loại giấy tờ chứng minh thu nhập cần thiết khi đăng ký mua nhà ở xã hội theo quy định mới nhất. Giúp bạn chuẩn bị hồ sơ đầy đủ và chính xác.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Đối tượng</p>
            </div>
            <p class="text-sm text-emerald-950">Người có thu nhập thấp</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Mức thu nhập</p>
            </div>
            <p class="text-sm text-emerald-950">≤ 15 triệu đồng/tháng</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Loại nhà</p>
            </div>
            <p class="text-sm text-emerald-950">Nhà ở xã hội</p>
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
            <span class="text-xs text-emerald-700">Nguồn: Cafeland</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1766418260/nha-o-xa-hoi_gbjjvl.jpg" alt="Nhà ở xã hội" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Hướng dẫn giấy tờ chứng minh thu nhập để mua nhà ở xã hội.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Để được mua nhà ở xã hội, người dân cần chứng minh thu nhập thuộc diện được hưởng chính sách. Dưới đây là các loại giấy tờ cần chuẩn bị theo từng đối tượng.</p>
            
            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Điều kiện về thu nhập</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Cá nhân:</strong> Thu nhập không quá 15 triệu đồng/tháng</li>
                    <li>• <strong>Hộ gia đình:</strong> Tổng thu nhập không quá 30 triệu đồng/tháng</li>
                    <li>• <strong>Không thuộc diện:</strong> Nộp thuế thu nhập cá nhân</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Giấy tờ cho người làm công ăn lương</h2>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Hồ sơ cần chuẩn bị</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Hợp đồng lao động:</strong> Bản sao có chứng thực hoặc bản chính để đối chiếu</li>
                    <li>• <strong>Xác nhận thu nhập:</strong> Giấy xác nhận thu nhập từ cơ quan, đơn vị công tác</li>
                    <li>• <strong>Sao kê lương:</strong> Sao kê tài khoản ngân hàng nhận lương 6 tháng gần nhất</li>
                    <li>• <strong>Bảng lương:</strong> Bảng lương có xác nhận của đơn vị sử dụng lao động</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Giấy tờ cho người lao động tự do</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Hồ sơ cần chuẩn bị</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Giấy xác nhận:</strong> Xác nhận của UBND xã/phường về tình trạng việc làm</li>
                    <li>• <strong>Bản cam kết:</strong> Cam kết về mức thu nhập hàng tháng</li>
                    <li>• <strong>Giấy tờ kinh doanh:</strong> Nếu có hộ kinh doanh cá thể</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Giấy tờ cho hộ nghèo, cận nghèo</h2>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Hồ sơ cần chuẩn bị</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Sổ hộ nghèo/cận nghèo:</strong> Bản sao có chứng thực</li>
                    <li>• <strong>Giấy xác nhận:</strong> Xác nhận của UBND xã/phường về tình trạng hộ nghèo</li>
                    <li>• <strong>Quyết định:</strong> Quyết định công nhận hộ nghèo/cận nghèo còn hiệu lực</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Lưu ý quan trọng</h2>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Những điều cần lưu ý</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• <strong>Thời hạn giấy tờ:</strong> Các giấy xác nhận thu nhập có hiệu lực trong 6 tháng</li>
                    <li>• <strong>Chứng thực:</strong> Bản sao cần được chứng thực tại UBND hoặc văn phòng công chứng</li>
                    <li>• <strong>Kê khai trung thực:</strong> Kê khai sai sự thật sẽ bị hủy kết quả và xử lý theo pháp luật</li>
                    <li>• <strong>Cập nhật quy định:</strong> Liên hệ cơ quan chức năng để biết quy định mới nhất</li>
                </ul>
            </div>

            <p>Việc chuẩn bị đầy đủ giấy tờ chứng minh thu nhập là bước quan trọng để đăng ký mua nhà ở xã hội thành công. Hãy kiểm tra kỹ các yêu cầu và chuẩn bị hồ sơ đúng quy định.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://cafeland.vn/kien-thuc/giay-to-chung-minh-ve-thu-nhap-de-mua-nha-o-xa-hoi-146602.html" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">Cafeland</a>
            </p>    
        </div>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Hướng dẫn chi tiết các loại giấy tờ chứng minh thu nhập cần thiết khi đăng ký mua nhà ở xã hội.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766418260/nha-o-xa-hoi_gbjjvl.jpg',
            'datePublished' => '2025-12-22T11:00:00+07:00',
            'dateModified' => '2025-12-22T11:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'Cafeland'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'nhà ở xã hội, giấy tờ thu nhập, mua nhà ở xã hội, chứng minh thu nhập',
            'articleSection' => 'Kiến thức',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Kiến thức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=knowledge'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Hướng dẫn chi tiết các loại giấy tờ chứng minh thu nhập cần thiết khi đăng ký mua nhà ở xã hội theo quy định mới nhất.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766418260/nha-o-xa-hoi_gbjjvl.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Hướng dẫn giấy tờ chứng minh thu nhập để mua nhà ở xã hội. Điều kiện, hồ sơ cần chuẩn bị cho từng đối tượng.',
            'meta_keywords' => 'nhà ở xã hội, giấy tờ thu nhập, mua nhà ở xã hội, chứng minh thu nhập, hồ sơ nhà ở xã hội',
            'og_title' => $title,
            'og_description' => 'Hướng dẫn chi tiết các loại giấy tờ chứng minh thu nhập cần thiết khi đăng ký mua nhà ở xã hội.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766418260/nha-o-xa-hoi_gbjjvl.jpg',
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

        // Link to post type (knowledge - Kiến thức)
        $knowledgeType = DB::table('post_types')->where('code', 'knowledge')->first();
        if (!$knowledgeType) {
            $knowledgeTypeId = DB::table('post_types')->insertGetId([
                'code' => 'knowledge',
                'name' => 'Kiến thức',
            ]);
        } else {
            $knowledgeTypeId = $knowledgeType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $knowledgeTypeId,
        ]);

        // Link to tags
        $tagCodes = ['nha-o-xa-hoi', 'ho-so-nha-dat', 'kien-thuc-bat-dong-san'];
        $tagNames = [
            'nha-o-xa-hoi' => 'Nhà ở xã hội',
            'ho-so-nha-dat' => 'Hồ sơ nhà đất',
            'kien-thuc-bat-dong-san' => 'Kiến thức bất động sản'
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