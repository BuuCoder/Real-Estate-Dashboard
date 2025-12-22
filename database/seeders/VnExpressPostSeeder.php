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
        $this->createQuyDinhBangGiaDat2026Post();
    }

    private function createQuyDinhBangGiaDat2026Post(): void
    {
        $title = 'Quy định mới nhất về bảng giá đất từ 2026';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-22 10:00:00');

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
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Quy định mới nhất về bảng giá đất từ 2026</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Từ năm 2026, bảng giá đất sẽ có nhiều thay đổi quan trọng theo Luật Đất đai 2024. Bài viết tổng hợp những quy định mới nhất về bảng giá đất mà người dân và nhà đầu tư cần nắm rõ.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Thời điểm áp dụng</p>
            </div>
            <p class="text-sm text-emerald-950">Từ ngày 01/01/2026</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Căn cứ pháp lý</p>
            </div>
            <p class="text-sm text-emerald-950">Luật Đất đai 2024</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Chu kỳ điều chỉnh</p>
            </div>
            <p class="text-sm text-emerald-950">Hàng năm (thay vì 5 năm)</p>
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
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1766417184/kien-thuc-nha-dat-2026_rg1svk.jpg" alt="Quy định mới về bảng giá đất từ 2026" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Quy định mới về bảng giá đất từ năm 2026 theo Luật Đất đai 2024.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Luật Đất đai 2024 đã được Quốc hội thông qua và có hiệu lực từ ngày 01/01/2025, tuy nhiên các quy định về bảng giá đất mới sẽ chính thức áp dụng từ năm 2026.</p>
            
            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Những điểm mới quan trọng</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Bỏ khung giá đất:</strong> Không còn khung giá đất do Chính phủ quy định</li>
                    <li>• <strong>Điều chỉnh hàng năm:</strong> Bảng giá đất được điều chỉnh hàng năm thay vì 5 năm</li>
                    <li>• <strong>Tiếp cận giá thị trường:</strong> Giá đất phải phù hợp với giá thị trường</li>
                    <li>• <strong>Phương pháp định giá:</strong> Áp dụng các phương pháp định giá khoa học</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Nguyên tắc xây dựng bảng giá đất</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Nguyên tắc định giá đất</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Phù hợp giá thị trường:</strong> Giá đất phải phù hợp với giá đất phổ biến trên thị trường</li>
                    <li>• <strong>Cùng mục đích sử dụng:</strong> So sánh với các thửa đất có cùng mục đích sử dụng</li>
                    <li>• <strong>Điều kiện tương đương:</strong> Xét đến vị trí, hạ tầng, điều kiện tự nhiên</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">4 Phương pháp định giá đất</h2>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Phương pháp so sánh:</strong> So sánh với giá đất đã chuyển nhượng trên thị trường</li>
                    <li>• <strong>Phương pháp thu nhập:</strong> Dựa trên thu nhập từ việc sử dụng đất</li>
                    <li>• <strong>Phương pháp thặng dư:</strong> Tính toán giá trị còn lại sau khi trừ chi phí</li>
                    <li>• <strong>Phương pháp hệ số điều chỉnh:</strong> Áp dụng hệ số điều chỉnh giá đất</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Ảnh hưởng đến người sử dụng đất</h2>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Các khoản phải nộp theo bảng giá đất</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Tiền sử dụng đất:</strong> Khi được giao đất, chuyển mục đích sử dụng đất</li>
                    <li>• <strong>Tiền thuê đất:</strong> Đối với trường hợp thuê đất trả tiền hàng năm</li>
                    <li>• <strong>Thuế sử dụng đất:</strong> Thuế sử dụng đất phi nông nghiệp</li>
                    <li>• <strong>Bồi thường:</strong> Khi Nhà nước thu hồi đất</li>
                </ul>
            </div>

            <p>Việc bảng giá đất tiếp cận giá thị trường sẽ giúp minh bạch hơn trong các giao dịch đất đai, đồng thời bảo vệ quyền lợi của người sử dụng đất khi bị thu hồi.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://cafeland.vn/kien-thuc/quy-dinh-moi-nhat-ve-bang-gia-dat-tu-2026-146969.html" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">Cafeland</a>
            </p>    
        </div>
    </div>
</article>
HTML;


        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Tổng hợp quy định mới nhất về bảng giá đất từ năm 2026 theo Luật Đất đai 2024.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766417184/kien-thuc-nha-dat-2026_rg1svk.jpg',
            'datePublished' => '2025-12-22T10:00:00+07:00',
            'dateModified' => '2025-12-22T10:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'Cafeland'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'bảng giá đất, Luật Đất đai 2024, quy định đất đai, giá đất 2026',
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
            'summary' => 'Tổng hợp quy định mới nhất về bảng giá đất từ năm 2026 theo Luật Đất đai 2024. Bảng giá đất sẽ được điều chỉnh hàng năm và tiếp cận giá thị trường.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766417184/kien-thuc-nha-dat-2026_rg1svk.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Quy định mới về bảng giá đất từ 2026 theo Luật Đất đai 2024. Bảng giá đất điều chỉnh hàng năm, tiếp cận giá thị trường.',
            'meta_keywords' => 'bảng giá đất, Luật Đất đai 2024, quy định đất đai, giá đất 2026, định giá đất',
            'og_title' => $title,
            'og_description' => 'Tổng hợp quy định mới nhất về bảng giá đất từ năm 2026 theo Luật Đất đai 2024.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1766417184/kien-thuc-nha-dat-2026_rg1svk.jpg',
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
        $tagCodes = ['bang-gia-dat', 'luat-dat-dai-2024', 'kien-thuc-bat-dong-san'];
        $tagNames = [
            'bang-gia-dat' => 'Bảng giá đất',
            'luat-dat-dai-2024' => 'Luật Đất đai 2024',
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