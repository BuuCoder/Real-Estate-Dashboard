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

    private function createDuAnDienPost(): void
    {
        $title = 'Phó Thủ tướng yêu cầu đẩy nhanh tiến độ các dự án điện tại TP HCM và Đồng Nai';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-11-29 11:24:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <p class="text-lg text-gray-700 leading-relaxed mb-4">
        Phó Thủ tướng Bùi Thanh Sơn giao cụ thể các mốc tiến độ cần hoàn thành về các dự án điện tại TP HCM và Đồng Nai, đặc biệt là Nhà máy điện Nhơn Trạch 3, 4 và Hiệp Phước.
    </p>

    <figure class="my-6">
        <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765443231/pho-thu-tuong-bui-thanh-son-1764331549588638838583-1764377097520-17643770985801160336160_jtc9kw.jpg" alt="Phó Thủ tướng Bùi Thanh Sơn" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-sm mt-2 italic">Phó Thủ tướng Bùi Thanh Sơn kiểm tra tiến độ xây dựng cụm dự án Nhà máy nhiệt điện Nhơn Trạch 3 và 4</figcaption>
    </figure>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Dự án Nhà máy điện Nhơn Trạch 3 và 4</h2>

    <p class="leading-relaxed mb-4">
        Văn phòng Chính phủ có Thông báo số 653 ngày 28/11 về ý kiến chỉ đạo của Phó Thủ tướng Chính phủ Bùi Thanh Sơn tại các buổi làm việc tại các dự án điện tại TP HCM và tỉnh Đồng Nai.
    </p>

    <div class="bg-teal-50 border border-teal-200 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-teal-800 mb-2">🏭 Yêu cầu với Nhà máy điện Nhơn Trạch 3 và 4</h3>
        <ul class="list-none space-y-2 text-teal-900">
            <li>• <strong>Tập đoàn Công nghiệp-Năng lượng quốc gia Việt Nam:</strong> Báo cáo Thủ tướng xem xét về thời gian khánh thành</li>
            <li>• <strong>Chủ đầu tư:</strong> Phối hợp hoàn thành nghiệm thu các hạng mục còn lại của Nhà máy điện Nhơn Trạch 4</li>
            <li>• <strong>UBND tỉnh Đồng Nai:</strong> Hoàn thành bàn giao mặt bằng xây dựng các móng trực thuộc dự án đường dây 220kV</li>
            <li>• <strong>Mục tiêu:</strong> Giải tỏa công suất của Nhà máy điện Nhơn Trạch 3 trong tháng 11/2025</li>
        </ul>
    </div>

    <div class="bg-amber-50 border-l-4 border-amber-400 p-4 my-4">
        <p class="text-amber-800">
            📋 <strong>Bộ Công Thương</strong> được giao nghiên cứu, xem xét theo thẩm quyền các đề xuất, kiến nghị của Tập đoàn Công nghiệp-Năng lượng quốc gia Việt Nam về <strong>cơ chế bán điện theo cụm</strong>.
        </p>
    </div>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Dự án Nhà máy điện Hiệp Phước giai đoạn 1</h2>

    <p class="leading-relaxed mb-4">
        Phó Thủ tướng đánh giá cao những nỗ lực của Chủ đầu tư trong thời gian vừa qua, đã hoàn thành được một số mốc tiến độ quan trọng trong công tác chuẩn bị đầu tư.
    </p>

    <div class="bg-sky-50 border border-sky-200 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-sky-800 mb-2">✅ Những thành tựu đã đạt được</h3>
        <ul class="list-none space-y-2 text-sky-900">
            <li>• Hoàn thành thi công cải tạo nâng cấp cầu cảng <strong>40.000 DWT</strong></li>
            <li>• Chuyển đổi từ cảng chuyên dụng xăng dầu sang thành cảng xăng dầu và LNG</li>
            <li>• Thi công xong bồn chứa LNG dung tích <strong>75.000 m³</strong></li>
        </ul>
    </div>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Lộ trình thực hiện chi tiết</h2>

    <div class="overflow-x-auto my-4">
        <table class="min-w-full rounded-xl overflow-hidden shadow-sm">
            <thead class="bg-gradient-to-r from-teal-500 to-teal-600">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold text-white">Đơn vị thực hiện</th>
                    <th class="px-4 py-3 text-left font-semibold text-white">Nhiệm vụ</th>
                    <th class="px-4 py-3 text-left font-semibold text-white">Thời hạn</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">UBND TP HCM</td>
                    <td class="px-4 py-3 border-b border-gray-100">Hướng dẫn hoàn thiện quy hoạch 1/500</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-rose-600 font-semibold">Sớm nhất</td>
                </tr>
                <tr class="bg-teal-50/50 hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">Bộ Công Thương</td>
                    <td class="px-4 py-3 border-b border-gray-100">Đẩy nhanh đàm phán, ký Hợp đồng mua bán điện</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-rose-600 font-semibold">Tháng 12/2025</td>
                </tr>
                <tr class="bg-white hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">Bộ Xây dựng</td>
                    <td class="px-4 py-3 border-b border-gray-100">Hướng dẫn thủ tục nhập khẩu tàu LNG</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-rose-600 font-semibold">Ngay</td>
                </tr>
                <tr class="bg-teal-50/50 hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">Chủ đầu tư</td>
                    <td class="px-4 py-3 border-b border-gray-100">Hoàn thành đưa dự án vào vận hành</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-teal-600 font-bold">Năm 2027</td>
                </tr>
                <tr class="bg-white hover:bg-teal-50 transition-colors">
                    <td class="px-4 py-3 border-b border-gray-100 font-semibold">UBND TP HCM</td>
                    <td class="px-4 py-3 border-b border-gray-100">Xử lý thỏa thuận giao cắt tuyến ống Cái Mép-Phú Mỹ</td>
                    <td class="px-4 py-3 border-b border-gray-100 text-rose-600 font-semibold">Tháng 11/2025</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-xl font-bold text-gray-900 mt-6 mb-3">Kế hoạch kiểm tra tiến độ</h2>

    <div class="bg-rose-50 border border-rose-200 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-rose-800 mb-2">📅 Chương trình kiểm tra sắp tới</h3>
        <p class="text-rose-900 mb-2">
            Bộ Công Thương phối hợp các bộ, cơ quan, đơn vị liên quan báo cáo Phó Thủ tướng Bùi Thanh Sơn chương trình kiểm tra tiến độ các công trình, dự án quan trọng quốc gia, trọng điểm ngành năng lượng.
        </p>
        <ul class="list-none space-y-2 text-rose-900">
            <li>• <strong>Thời gian:</strong> Từ ngày 15 đến ngày 31/12/2025</li>
            <li>• <strong>Trọng tâm:</strong> Các dự án nhà máy điện sử dụng khí thiên nhiên trong nước</li>
            <li>• <strong>Ưu tiên:</strong> Các cụm dự án nhà máy nhiệt điện sử dụng khí LNG có kho cảng dùng chung</li>
        </ul>
    </div>

    <div class="bg-gray-50 rounded-lg p-4 my-4">
        <h3 class="font-semibold text-gray-900 mb-3">🎯 Mục tiêu chung</h3>
        <ul class="list-none space-y-2 text-gray-700">
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Đảm bảo an ninh năng lượng quốc gia</span></li>
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Phát điện sớm hơn tiến độ đã đề ra trong Điều chỉnh Quy hoạch điện VIII</span></li>
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Đảm bảo chất lượng và lưới điện giải tỏa công suất đồng bộ</span></li>
            <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span><span>Thực hiện đúng quy trình an toàn cho người lao động và công trình</span></li>
        </ul>
    </div>

    <p class="text-gray-500 text-sm mt-6 pt-4 border-t border-gray-200">
        <em>Nguồn: CafeF.vn - Theo Lê Thuý/Người Lao Động</em>
    </p>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Phó Thủ tướng Bùi Thanh Sơn giao cụ thể các mốc tiến độ cần hoàn thành về các dự án điện tại TP HCM và Đồng Nai, đặc biệt là Nhà máy điện Nhơn Trạch 3, 4 và Hiệp Phước.',
            'image' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765443231/pho-thu-tuong-bui-thanh-son-1764331549588638838583-1764377097520-17643770985801160336160_jtc9kw.jpg',
            'datePublished' => '2025-11-29T11:24:00+07:00',
            'dateModified' => '2025-11-29T11:24:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'Lê Thuý',
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
            'keywords' => 'dự án điện, Nhơn Trạch, Hiệp Phước, Phó Thủ tướng, năng lượng, nhiệt điện, LNG',
            'articleSection' => 'Tin tức bất động sản',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Tin tức bất động sản', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=news'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 1,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Phó Thủ tướng Bùi Thanh Sơn giao cụ thể các mốc tiến độ cần hoàn thành về các dự án điện tại TP HCM và Đồng Nai, đặc biệt là Nhà máy điện Nhơn Trạch 3, 4 và Hiệp Phước.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765443231/pho-thu-tuong-bui-thanh-son-1764331549588638838583-1764377097520-17643770985801160336160_jtc9kw.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Phó Thủ tướng yêu cầu đẩy nhanh tiến độ dự án điện Nhơn Trạch 3, 4 và Hiệp Phước. Mục tiêu hoàn thành trong tháng 11/2025 và đưa vào vận hành năm 2027.',
            'meta_keywords' => 'dự án điện Nhơn Trạch, Hiệp Phước, Phó Thủ tướng Bùi Thanh Sơn, nhiệt điện LNG, năng lượng Việt Nam, Đồng Nai, TP HCM',
            'og_title' => $title,
            'og_description' => 'Phó Thủ tướng Bùi Thanh Sơn giao cụ thể các mốc tiến độ cần hoàn thành về các dự án điện tại TP HCM và Đồng Nai, đặc biệt là Nhà máy điện Nhơn Trạch 3, 4 và Hiệp Phước.',
            'og_image' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765443231/pho-thu-tuong-bui-thanh-son-1764331549588638838583-1764377097520-17643770985801160336160_jtc9kw.jpg',
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

    <p class="text-gray-500 text-sm mt-6 pt-4 border-t border-gray-200">
        <em>Nguồn: VnExpress.net</em>
    </p>
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
            'author_id' => 1,
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
