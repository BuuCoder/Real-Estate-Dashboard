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
        $this->createMayBayLongThanhPost();
    }
    
    private function createMayBayLongThanhPost(): void
    {
        $title = 'Máy bay lớn nhất Việt Nam hạ cánh tại Long Thành hôm nay';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-15 08:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <p class="text-lg text-gray-700 leading-relaxed mb-4">
        Chiếc Boeing 787-10 Dreamliner - máy bay thân rộng lớn nhất trong đội bay của Vietnam Airlines - đã thực hiện chuyến bay lịch sử, hạ cánh thành công tại sân bay quốc tế Long Thành trong ngày hôm nay.
    </p>

    <figure class="my-6">
        <img src="https://res.cloudinary.com/daxynpb9m/image/upload/v1765814335/a-nh-ma-n-hi-nh-2023-12-16-lu-2248-4709-1765764955_rohv89.webp" alt="Boeing 787-10 hạ cánh tại sân bay Long Thành" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-sm mt-2 italic">Boeing 787-10 Dreamliner của Vietnam Airlines hạ cánh tại sân bay quốc tế Long Thành</figcaption>
    </figure>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Chuyến bay lịch sử đánh dấu cột mốc quan trọng</h2>

    <p class="leading-relaxed mb-4">
        Đây là chuyến bay thử nghiệm đầu tiên của dòng máy bay thân rộng tại sân bay quốc tế Long Thành, đánh dấu bước tiến quan trọng trong quá trình chuẩn bị đưa sân bay vào khai thác thương mại.
    </p>

    <div class="bg-teal-50 border border-teal-200 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-teal-800 mb-2">✈️ Thông số kỹ thuật Boeing 787-10 Dreamliner</h3>
        <ul class="list-none space-y-2 text-teal-900">
            <li>• <strong>Chiều dài:</strong> 68,3 mét - dài nhất trong dòng 787</li>
            <li>• <strong>Sải cánh:</strong> 60,1 mét</li>
            <li>• <strong>Sức chứa:</strong> Lên đến 330 hành khách</li>
            <li>• <strong>Tầm bay:</strong> Khoảng 11.910 km</li>
            <li>• <strong>Động cơ:</strong> 2 động cơ General Electric GEnx hoặc Rolls-Royce Trent 1000</li>
        </ul>
    </div>

    <div class="bg-amber-50 border-l-4 border-amber-400 p-4 my-4">
        <p class="text-amber-800">
            📋 <strong>Sân bay quốc tế Long Thành</strong> được thiết kế để tiếp nhận các loại máy bay lớn nhất thế giới như Airbus A380 và Boeing 747-8, với đường băng dài <strong>4.000 mét</strong> và rộng <strong>75 mét</strong>.
        </p>
    </div>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Sân bay Long Thành - Cửa ngõ hàng không mới của Việt Nam</h2>

    <p class="leading-relaxed mb-4">
        Sân bay quốc tế Long Thành tọa lạc tại huyện Long Thành, tỉnh Đồng Nai, cách trung tâm TP HCM khoảng 40 km về phía Đông. Đây là dự án hạ tầng giao thông trọng điểm quốc gia với tổng vốn đầu tư giai đoạn 1 khoảng 4,8 tỷ USD.
    </p>

    <figure class="my-6">
        <img src="https://res.cloudinary.com/daxynpb9m/image/upload/v1765814334/3583031170096492182-1765752750-2642-1765753486_ylal9t.webp" alt="Sân bay quốc tế Long Thành sẵn sàng đón khách" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-sm mt-2 italic">Sân bay quốc tế Long Thành sẵn sàng đón các chuyến bay thương mại</figcaption>
    </figure>

    <div class="bg-sky-50 border border-sky-200 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-sky-800 mb-2">🏗️ Tiến độ xây dựng giai đoạn 1</h3>
        <ul class="list-none space-y-2 text-sky-900">
            <li>• Hoàn thành đường băng số 1 dài <strong>4.000m x 75m</strong></li>
            <li>• Nhà ga hành khách T1 công suất <strong>25 triệu khách/năm</strong></li>
            <li>• Hệ thống đường lăn, sân đỗ máy bay hiện đại</li>
            <li>• Đài kiểm soát không lưu cao <strong>123 mét</strong></li>
        </ul>
    </div>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Lộ trình khai thác thương mại</h2>

    <div class="overflow-x-auto my-4">
        <table class="min-w-full rounded-xl overflow-hidden shadow-sm">
            <thead class="bg-gradient-to-r from-teal-500 to-teal-600">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold text-white">Giai đoạn</th>
                    <th class="px-4 py-3 text-left font-semibold text-white">Nội dung</th>
                    <th class="px-4 py-3 text-left font-semibold text-white">Thời gian</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">Bay thử nghiệm</td>
                    <td class="px-4 py-3 border-b border-gray-100">Kiểm tra hệ thống đường băng, dẫn đường</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-teal-600 font-semibold">Tháng 12/2025</td>
                </tr>
                <tr class="bg-teal-50/50 hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">Nghiệm thu</td>
                    <td class="px-4 py-3 border-b border-gray-100">Hoàn thiện các hạng mục còn lại</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-amber-600 font-semibold">Quý I/2026</td>
                </tr>
                <tr class="bg-white hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">Khai trương</td>
                    <td class="px-4 py-3 border-b border-gray-100">Đón chuyến bay thương mại đầu tiên</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-rose-600 font-bold">Quý II/2026</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Tác động đến thị trường bất động sản</h2>

    <figure class="my-6">
        <img src="https://res.cloudinary.com/daxynpb9m/image/upload/v1765814334/0d5a6d3fe2386d663429-176575325-1891-6894-1765753486_rk6er1.webp" alt="Thủ tướng kiểm tra sân bay Long Thành" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-sm mt-2 italic">Thủ tướng Chính phủ kiểm tra tiến độ xây dựng sân bay quốc tế Long Thành</figcaption>
    </figure>

    <div class="bg-rose-50 border border-rose-200 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-rose-800 mb-2">📈 Cơ hội đầu tư bất động sản</h3>
        <p class="text-rose-900 mb-2">
            Sự kiện máy bay lớn nhất hạ cánh thành công tại Long Thành là tín hiệu tích cực cho thị trường bất động sản khu vực:
        </p>
        <ul class="list-none space-y-2 text-rose-900">
            <li>• <strong>Đất nền Long Thành:</strong> Tiếp tục tăng giá khi sân bay sắp đi vào hoạt động</li>
            <li>• <strong>Bất động sản công nghiệp:</strong> Nhu cầu kho bãi, logistics tăng cao</li>
            <li>• <strong>Nhà ở, căn hộ:</strong> Thu hút lao động và chuyên gia đến làm việc</li>
            <li>• <strong>Thương mại dịch vụ:</strong> Khách sạn, nhà hàng phục vụ du khách</li>
        </ul>
    </div>

    <div class="bg-gray-50 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-gray-900 mb-3">🎯 Ý nghĩa của sự kiện</h3>
        <ul class="list-none space-y-2 text-gray-700">
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Khẳng định năng lực tiếp nhận máy bay cỡ lớn của sân bay Long Thành</span></li>
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Đánh dấu bước tiến quan trọng trong lộ trình khai thác thương mại</span></li>
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Nâng cao vị thế hàng không Việt Nam trong khu vực</span></li>
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Thúc đẩy phát triển kinh tế - xã hội vùng Đông Nam Bộ</span></li>
        </ul>
    </div>

    <div class="mt-4 mb-4 p-3 bg-gradient-to-r from-emerald-50 to-teal-50 border border-emerald-100 rounded-lg">
      <div class="text-sm font-medium text-gray-700 mb-2">Nguồn bài viết:</div>
      <a href="https://vnexpress.net" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium text-sm transition-colors">
        <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
        </svg>
        VnExpress.net
        <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokewidth="2">
          <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
          <polyline points="15,3 21,3 21,9"></polyline>
          <line x1="10" y1="14" x2="21" y2="3"></line>
        </svg>
      </a>
    </div>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Boeing 787-10 Dreamliner - máy bay thân rộng lớn nhất của Vietnam Airlines - hạ cánh thành công tại sân bay quốc tế Long Thành, đánh dấu cột mốc quan trọng trước thềm khai thác thương mại.',
            'image' => 'https://res.cloudinary.com/daxynpb9m/image/upload/v1765814335/a-nh-ma-n-hi-nh-2023-12-16-lu-2248-4709-1765764955_rohv89.webp',
            'datePublished' => '2025-12-15T08:00:00+07:00',
            'dateModified' => '2025-12-15T08:00:00+07:00',
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
            'keywords' => 'sân bay Long Thành, Boeing 787-10, Vietnam Airlines, Đồng Nai, hàng không, máy bay',
            'articleSection' => 'Tin tức bất động sản',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Tin tức bất động sản', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=news'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Boeing 787-10 Dreamliner - máy bay thân rộng lớn nhất của Vietnam Airlines - hạ cánh thành công tại sân bay quốc tế Long Thành, đánh dấu cột mốc quan trọng trước thềm khai thác thương mại.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/daxynpb9m/image/upload/v1765814335/a-nh-ma-n-hi-nh-2023-12-16-lu-2248-4709-1765764955_rohv89.webp',
            'reading_minutes' => 4,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Boeing 787-10 Dreamliner hạ cánh tại sân bay Long Thành. Cập nhật tiến độ xây dựng và cơ hội đầu tư bất động sản khu vực Đồng Nai.',
            'meta_keywords' => 'sân bay Long Thành, Boeing 787-10, Vietnam Airlines, Đồng Nai, bất động sản Long Thành, đầu tư sân bay',
            'og_title' => $title,
            'og_description' => 'Boeing 787-10 Dreamliner - máy bay thân rộng lớn nhất của Vietnam Airlines - hạ cánh thành công tại sân bay quốc tế Long Thành.',
            'og_image' => 'https://res.cloudinary.com/daxynpb9m/image/upload/v1765814335/a-nh-ma-n-hi-nh-2023-12-16-lu-2248-4709-1765764955_rohv89.webp',
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

        // Link to post type (news - Tin tức bất động sản)
        $newsType = DB::table('post_types')->where('code', 'news')->first();
        if ($newsType) {
            DB::table('post_post_types')->insert([
                'post_id' => $postId,
                'post_type_id' => $newsType->id,
            ]);
        }

        // Link to tags
        $tagCodes = ['dong-nai', 'thi-truong', 'quy-hoach'];
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
