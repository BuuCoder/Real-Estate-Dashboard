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
        $title = 'Quốc hội chốt thêm 3 trường hợp Nhà nước thu hồi đất từ 2026';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-11 10:09:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none">
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-4 md:mb-6">
        Từ 2026, Nhà nước sẽ thu hồi đất thêm 3 trường hợp để phát triển kinh tế - xã hội, trong đó có đất cho dự án khu thương mại tự do, trung tâm tài chính quốc tế.
    </p>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Với hơn 90% đại biểu tán thành, Quốc hội thông qua Nghị quyết về một số cơ chế tháo gỡ khó khăn thực hiện Luật Đất đai, sáng 11/12.
    </p>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">3 trường hợp Nhà nước thu hồi đất mới</h2>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Nghị quyết bổ sung thêm 3 trường hợp Nhà nước thu hồi đất để phát triển kinh tế - xã hội:
    </p>

    <ul class="list-disc pl-5 space-y-2 md:space-y-3 mb-4 md:mb-6 text-base text-gray-800">
        <li class="leading-relaxed">
            <span class="font-semibold">Trường hợp 1:</span> Thu hồi đất để thực hiện dự án khu thương mại tự do hay trong trung tâm tài chính quốc tế.
        </li>
        <li class="leading-relaxed">
            <span class="font-semibold">Trường hợp 2:</span> Chủ đầu tư đã đàm phán được trên 75% diện tích và hơn 75% người có đất. HĐND cấp tỉnh sẽ xem xét, thông qua việc thu hồi phần đất còn lại để giao cho chủ đầu tư.
        </li>
        <li class="leading-relaxed">
            <span class="font-semibold">Trường hợp 3:</span> Nhà nước thu hồi để tạo quỹ đất thanh toán theo hợp đồng BT, cho thuê đất, tiếp tục sản xuất kinh doanh.
        </li>
    </ul>

    <div class="bg-blue-50 border-l-4 border-blue-500 p-3 md:p-4 my-4 md:my-6">
        <p class="text-blue-800 font-medium text-sm md:text-base">
            Các trường hợp bổ sung này được thực hiện từ ngày 1/1/2026.
        </p>
    </div>

    <figure class="my-5 md:my-8">
        <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?w=800" alt="Phiên họp Quốc hội" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-xs md:text-sm mt-2 italic">Các đại biểu tại phiên họp sáng 11/12. Ảnh minh họa</figcaption>
    </figure>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Quy định hiện hành về thu hồi đất</h2>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Luật hiện hành có <span class="font-semibold">32 trường hợp</span> Nhà nước thu hồi đất để phát triển kinh tế - xã hội, được chia theo 3 nhóm chính:
    </p>

    <ul class="list-disc pl-5 space-y-1 md:space-y-2 mb-4 md:mb-6 text-base text-gray-800">
        <li>Xây dựng công trình công cộng</li>
        <li>Trụ sở cơ quan Nhà nước</li>
        <li>Các dự án quan trọng (khu công nghiệp, cụm công nghiệp, khu công nghệ cao, hoạt động lấn biển...)</li>
    </ul>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Bảng giá đất và bồi thường</h2>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Theo Nghị quyết, bảng giá và hệ số điều chỉnh được áp dụng làm căn cứ bồi thường khi Nhà nước thu hồi đất. Hiện tại, việc bồi thường theo giá đất cụ thể do UBND địa phương quyết định tại thời điểm duyệt phương án bồi thường, tái định cư.
    </p>

    <div class="bg-gray-100 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2 md:mb-3">Quy trình xây dựng bảng giá đất:</h3>
        <ul class="space-y-2 text-sm md:text-base text-gray-700">
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Xây dựng theo loại, vị trí và khu vực đất</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>HĐND cấp tỉnh quyết định bảng giá</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Áp dụng từ 1/1/2026</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span>Sửa đổi, bổ sung khi cần thiết</span>
            </li>
        </ul>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Quy trình thông báo thu hồi đất</h2>

    <div class="overflow-x-auto my-4 md:my-6 -mx-2 md:mx-0">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg text-sm md:text-base">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Loại đất</th>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Thời gian thông báo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Đất nông nghiệp</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Tối thiểu 60 ngày</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Đất phi nông nghiệp</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Tối thiểu 120 ngày</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-yellow-800 mb-2 md:mb-3">📋 Quy trình công khai và đối thoại:</h3>
        <ul class="space-y-2 text-sm md:text-base text-yellow-900">
            <li>• Phương án bồi thường phải niêm yết công khai trong <strong>10 ngày</strong> tại trụ sở UBND cấp xã</li>
            <li>• Trường hợp không đồng thuận, phải tổ chức đối thoại trong <strong>30 ngày</strong></li>
        </ul>
    </div>

    <p class="text-gray-500 text-xs md:text-sm mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-200">
        <em>Nguồn: VnExpress - Tác giả: Anh Tú</em>
    </p>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Từ 2026, Nhà nước sẽ thu hồi đất thêm 3 trường hợp để phát triển kinh tế - xã hội, trong đó có đất cho dự án khu thương mại tự do, trung tâm tài chính quốc tế.',
            'image' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?w=1200',
            'datePublished' => '2025-12-11T10:09:00+07:00',
            'dateModified' => '2025-12-11T10:09:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'Anh Tú',
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
            'keywords' => 'thu hồi đất, luật đất đai, quốc hội, bồi thường đất, khu thương mại tự do, trung tâm tài chính',
            'articleSection' => 'Pháp lý nhà đất',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Pháp lý nhà đất', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=legal'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        // Insert post
        $postId = DB::table('posts')->insertGetId([
            'author_id' => 1,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Từ 2026, Nhà nước sẽ thu hồi đất thêm 3 trường hợp để phát triển kinh tế - xã hội, trong đó có đất cho dự án khu thương mại tự do, trung tâm tài chính quốc tế.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?w=1200',
            'reading_minutes' => 4,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Quốc hội thông qua Nghị quyết bổ sung 3 trường hợp Nhà nước thu hồi đất từ 2026: khu thương mại tự do, trung tâm tài chính, và dự án đã đàm phán 75% diện tích.',
            'meta_keywords' => 'thu hồi đất, luật đất đai 2024, quốc hội, bồi thường đất, khu thương mại tự do, trung tâm tài chính quốc tế, nghị quyết đất đai',
            'og_title' => $title,
            'og_description' => 'Từ 2026, Nhà nước sẽ thu hồi đất thêm 3 trường hợp để phát triển kinh tế - xã hội, trong đó có đất cho dự án khu thương mại tự do, trung tâm tài chính quốc tế.',
            'og_image' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?w=1200',
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

        // Link to post type (legal - Pháp lý nhà đất)
        $legalType = DB::table('post_types')->where('code', 'legal')->first();
        if ($legalType) {
            DB::table('post_post_types')->insert([
                'post_id' => $postId,
                'post_type_id' => $legalType->id,
            ]);
        }

        // Link to tags
        $tagCodes = ['phap-ly', 'quy-hoach', 'gia-dat'];
        $tags = DB::table('tags')->whereIn('code', $tagCodes)->get();
        foreach ($tags as $tag) {
            DB::table('post_tags')->insert([
                'post_id' => $postId,
                'tag_id' => $tag->id,
            ]);
        }

        $this->command->info("Created post: {$title}");

        // Bài viết 2: Nhà ở xã hội Hà Nội
        $this->createNhaOXaHoiPost();

        // Bài viết 3: Giấy phép xây dựng online
        $this->createGiayPhepXayDungPost();

        // Bài viết 4: Nhơn Trạch đô thị vệ tinh
        $this->createNhonTrachPost();
    }

    private function createNhaOXaHoiPost(): void
    {
        $title = 'Hà Nội mở bán loạt nhà ở xã hội từ 10 triệu đồng một m2';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-11 09:47:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none">
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-4 md:mb-6">
        Hơn 170 căn nhà xã hội đã cho thuê đủ thời hạn được thành phố chuyển sang mở bán với giá 10-15 triệu đồng một m2.
    </p>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Sở Xây dựng Hà Nội vừa có kế hoạch tiếp nhận hồ sơ mua lại các căn nhà ở xã hội đã cho thuê đủ thời hạn tại hai dự án. Đây là nhóm căn hộ từng nằm trong diện thuê - mua, nay được chuyển sang bán theo quy định.
    </p>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Dự án 1: Khu nhà ở xã hội Bamboo Garden</h2>

    <div class="bg-green-50 border border-green-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-green-800 mb-2 md:mb-3">🏠 Thông tin dự án Bamboo Garden</h3>
        <ul class="space-y-2 text-sm md:text-base text-green-900">
            <li><strong>Chủ đầu tư:</strong> Công ty cổ phần Tập đoàn CEO</li>
            <li><strong>Vị trí:</strong> Khu đô thị Quốc Oai (cách trung tâm gần 30 km)</li>
            <li><strong>Quy mô:</strong> Hơn 1 ha, 2 tòa 9 tầng, 432 căn hộ</li>
            <li><strong>Tổng mức đầu tư:</strong> Hơn 242 tỷ đồng</li>
        </ul>
    </div>

    <div class="overflow-x-auto my-4 md:my-6 -mx-2 md:mx-0">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg text-sm md:text-base">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Thông tin</th>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Số căn mở bán</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">86 căn</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Diện tích</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">48,6 - 58,6 m²</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Giá bán</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-green-600 border-b font-bold">~10 triệu/m²</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Tổng giá</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">486 - 586 triệu</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Nhận hồ sơ</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-red-600 border-b font-semibold">01/12 - 15/01/2026</td>
                </tr>
            </tbody>
        </table>
    </div>

    <figure class="my-5 md:my-8">
        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800" alt="Khu nhà ở xã hội Bamboo Garden" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-xs md:text-sm mt-2 italic">Khu nhà ở xã hội Bamboo Garden. Ảnh minh họa</figcaption>
    </figure>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Dự án 2: Khu nhà xã hội Đông Hội</h2>

    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-blue-800 mb-2 md:mb-3">🏢 Thông tin dự án Đông Hội</h3>
        <ul class="space-y-2 text-sm md:text-base text-blue-900">
            <li><strong>Chủ đầu tư:</strong> Công ty TNHH Thăng Long</li>
            <li><strong>Vị trí:</strong> Ô đất 5B2 khu tái định cư Đông Hội, Đông Anh</li>
            <li><strong>Quy mô:</strong> 4.500 m², 1 tòa 30 tầng, 504 căn hộ</li>
        </ul>
    </div>

    <div class="overflow-x-auto my-4 md:my-6 -mx-2 md:mx-0">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg text-sm md:text-base">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Thông tin</th>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Số căn mở bán</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">88 căn</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Diện tích</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">57,8 - 67,2 m²</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Giá bán</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-green-600 border-b font-bold">~15 triệu/m²</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Tổng giá</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">867 triệu - 1 tỷ+</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Nhận hồ sơ</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-red-600 border-b font-semibold">01/12 - 12/01/2026</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Mục tiêu phát triển nhà ở xã hội</h2>

    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-3 md:p-4 my-4 md:my-6">
        <p class="text-sm md:text-base text-yellow-800">
            Theo đề án phát triển <strong>1 triệu căn nhà xã hội</strong>, Hà Nội được giao làm <strong>56.200 căn</strong> đến hết 2030 - thuộc nhóm cao nhất cả nước.
        </p>
    </div>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Năm nay, thành phố dự kiến hoàn thành <span class="font-semibold">6 dự án</span> với hơn <span class="font-semibold">4.700 căn</span>, vượt chỉ tiêu theo năm.
    </p>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Xu hướng giá nhà ở xã hội</h2>

    <div class="bg-red-50 border border-red-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-red-800 mb-2 md:mb-3">📈 Biến động giá</h3>
        <ul class="space-y-2 text-sm md:text-base text-red-900">
            <li>• <strong>3 năm trước:</strong> Dưới 20 triệu/m²</li>
            <li>• <strong>Hiện tại:</strong> 25-29,4 triệu/m²</li>
            <li>• <strong>Xu hướng:</strong> Tăng từ cuối 2024</li>
        </ul>
    </div>

    <p class="text-gray-500 text-xs md:text-sm mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-200">
        <em>Nguồn: VnExpress - Tác giả: Ngọc Diễm</em>
    </p>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Hơn 170 căn nhà xã hội đã cho thuê đủ thời hạn được thành phố chuyển sang mở bán với giá 10-15 triệu đồng một m2.',
            'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1200',
            'datePublished' => '2025-12-11T09:47:00+07:00',
            'dateModified' => '2025-12-11T09:47:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'Ngọc Diễm',
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
            'keywords' => 'nhà ở xã hội, Hà Nội, Bamboo Garden, Đông Hội, mua nhà giá rẻ, căn hộ xã hội',
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
            'summary' => 'Hơn 170 căn nhà xã hội đã cho thuê đủ thời hạn được thành phố chuyển sang mở bán với giá 10-15 triệu đồng một m2.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1200',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Hà Nội mở bán 174 căn nhà ở xã hội tại Bamboo Garden (Quốc Oai) và Đông Hội (Đông Anh) với giá từ 10-15 triệu đồng/m2. Thời gian nhận hồ sơ đến tháng 1/2026.',
            'meta_keywords' => 'nhà ở xã hội Hà Nội, Bamboo Garden, Đông Hội, mua nhà giá rẻ, căn hộ xã hội, nhà ở xã hội 2025',
            'og_title' => $title,
            'og_description' => 'Hơn 170 căn nhà xã hội đã cho thuê đủ thời hạn được thành phố chuyển sang mở bán với giá 10-15 triệu đồng một m2.',
            'og_image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1200',
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
        $tagCodes = ['nha-o', 'can-ho', 'ha-noi', 'gia-nha'];
        $tags = DB::table('tags')->whereIn('code', $tagCodes)->get();
        foreach ($tags as $tag) {
            DB::table('post_tags')->insert([
                'post_id' => $postId,
                'tag_id' => $tag->id,
            ]);
        }

        $this->command->info("Created post: {$title}");
    }

    private function createGiayPhepXayDungPost(): void
    {
        $title = 'Cấp giấy phép xây dựng online, dự kiến tối đa 10 ngày';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-10 16:59:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none">
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-4 md:mb-6">
        Việc cấp giấy phép xây dựng toàn trình trực tuyến (online), dự kiến tối đa 7-10 ngày, giúp giảm 30% thời gian, chi phí so với hiện nay.
    </p>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Chiều 10/12, Quốc hội thông qua Luật Xây dựng (sửa đổi) với hơn 92% đại biểu tán thành. Theo đó, Quốc hội giao Chính phủ quy định chi tiết về điều kiện, hồ sơ, trình tự, thủ tục cấp giấy phép xây dựng.
    </p>

    <div class="bg-green-50 border-l-4 border-green-500 p-3 md:p-4 my-4 md:my-6">
        <p class="text-green-800 font-medium text-sm md:text-base">
            ✅ Thủ tục cấp phép xây dựng sẽ được thực hiện <strong>hoàn toàn trực tuyến</strong>, thời gian cấp dự kiến tối đa <strong>7-10 ngày</strong>, giảm tối thiểu <strong>30%</strong> thời gian và chi phí.
        </p>
    </div>

    <figure class="my-5 md:my-8">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800" alt="Công trình xây dựng" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-xs md:text-sm mt-2 italic">Bộ trưởng Xây dựng Trần Hồng Minh phát biểu tại phiên họp chiều 10/12. Ảnh minh họa</figcaption>
    </figure>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">So sánh thời gian cấp phép</h2>

    <div class="overflow-x-auto my-4 md:my-6 -mx-2 md:mx-0">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg text-sm md:text-base">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Loại công trình</th>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Hiện tại</th>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Dự kiến mới</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Nhà ở riêng lẻ</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">15 ngày</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-green-600 border-b font-bold">7-10 ngày</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Công trình khác</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">20 ngày</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-green-600 border-b font-bold">7-10 ngày</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Công trình cấp I, II</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">30 ngày</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-green-600 border-b font-bold">Giảm 30%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Những thay đổi quan trọng</h2>

    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-blue-800 mb-2 md:mb-3">📋 Cải cách thủ tục</h3>
        <ul class="space-y-2 text-sm md:text-base text-blue-900">
            <li class="flex items-start">
                <span class="text-blue-500 mr-2">•</span>
                <span>Bãi bỏ thủ tục thẩm định thiết kế kỹ thuật, bản vẽ thi công</span>
            </li>
            <li class="flex items-start">
                <span class="text-blue-500 mr-2">•</span>
                <span>Chủ đầu tư chịu trách nhiệm kiểm soát thiết kế sau khi được duyệt</span>
            </li>
            <li class="flex items-start">
                <span class="text-blue-500 mr-2">•</span>
                <span>Mỗi công trình chỉ thực hiện <strong>một thủ tục</strong> từ chuẩn bị đến khởi công</span>
            </li>
            <li class="flex items-start">
                <span class="text-blue-500 mr-2">•</span>
                <span>Tăng trách nhiệm tư vấn thiết kế về an toàn công trình</span>
            </li>
        </ul>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Công trình được miễn giấy phép</h2>

    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-yellow-800 mb-2 md:mb-3">🏠 Các trường hợp miễn giấy phép xây dựng</h3>
        <ul class="space-y-2 text-sm md:text-base text-yellow-900">
            <li>• Công trình cấp IV</li>
            <li>• Nhà ở riêng lẻ dưới <strong>7 tầng</strong></li>
            <li>• Tổng diện tích sàn xây dựng dưới <strong>500 m²</strong></li>
            <li>• Dự án đã thẩm định báo cáo nghiên cứu khả thi</li>
        </ul>
    </div>

    <div class="bg-red-50 border-l-4 border-red-500 p-3 md:p-4 my-4 md:my-6">
        <p class="text-red-800 text-sm md:text-base">
            <strong>⚠️ Lưu ý:</strong> Quy định miễn giấy phép không áp dụng với công trình thuộc khu chức năng, phát triển đô thị trong quy hoạch chung thành phố, khu du lịch quốc gia hoặc nơi đã có quy chế quản lý kiến trúc.
        </p>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Thời điểm có hiệu lực</h2>

    <div class="bg-gray-100 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <ul class="space-y-2 text-sm md:text-base text-gray-700">
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span><strong>Luật Xây dựng (sửa đổi):</strong> Có hiệu lực từ 1/7/2026</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                <span><strong>Quy định miễn giấy phép:</strong> Có hiệu lực từ đầu năm 2026</span>
            </li>
        </ul>
    </div>

    <p class="text-gray-500 text-xs md:text-sm mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-200">
        <em>Nguồn: VnExpress - Tác giả: Anh Tú</em>
    </p>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Việc cấp giấy phép xây dựng toàn trình trực tuyến (online), dự kiến tối đa 7-10 ngày, giúp giảm 30% thời gian, chi phí so với hiện nay.',
            'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200',
            'datePublished' => '2025-12-10T16:59:00+07:00',
            'dateModified' => '2025-12-10T16:59:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'Anh Tú',
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
            'keywords' => 'giấy phép xây dựng, luật xây dựng, cấp phép online, thủ tục xây dựng, miễn giấy phép',
            'articleSection' => 'Pháp lý nhà đất',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Pháp lý nhà đất', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=legal'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 1,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Việc cấp giấy phép xây dựng toàn trình trực tuyến (online), dự kiến tối đa 7-10 ngày, giúp giảm 30% thời gian, chi phí so với hiện nay.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200',
            'reading_minutes' => 4,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Quốc hội thông qua Luật Xây dựng sửa đổi: cấp giấy phép xây dựng online tối đa 7-10 ngày, giảm 30% thời gian. Nhà dưới 7 tầng, dưới 500m2 được miễn giấy phép.',
            'meta_keywords' => 'giấy phép xây dựng online, luật xây dựng 2025, cấp phép xây dựng, miễn giấy phép xây dựng, thủ tục xây dựng',
            'og_title' => $title,
            'og_description' => 'Việc cấp giấy phép xây dựng toàn trình trực tuyến (online), dự kiến tối đa 7-10 ngày, giúp giảm 30% thời gian, chi phí so với hiện nay.',
            'og_image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200',
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

        // Link to post type (legal - Pháp lý nhà đất)
        $legalType = DB::table('post_types')->where('code', 'legal')->first();
        if ($legalType) {
            DB::table('post_post_types')->insert([
                'post_id' => $postId,
                'post_type_id' => $legalType->id,
            ]);
        }

        // Link to tags
        $tagCodes = ['phap-ly', 'nha-o'];
        $tags = DB::table('tags')->whereIn('code', $tagCodes)->get();
        foreach ($tags as $tag) {
            DB::table('post_tags')->insert([
                'post_id' => $postId,
                'tag_id' => $tag->id,
            ]);
        }

        $this->command->info("Created post: {$title}");
    }

    private function createNhonTrachPost(): void
    {
        $title = 'Nhơn Trạch có tiềm năng trở thành đô thị vệ tinh cho TP HCM';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-11 14:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none">
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-4 md:mb-6">
        Sở hữu thế mạnh về công nghiệp, dịch vụ cảng, hạ tầng liên kết với TP HCM, Nhơn Trạch thu hút nhiều dự án bất động sản nhà ở.
    </p>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Công nghiệp phát triển, đô thị hóa nhanh</h2>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Theo báo cáo của UBND tỉnh Đồng Nai, Nhơn Trạch và Biên Hoà là hai địa phương dẫn đầu sản lượng sản xuất công nghiệp. Nhơn Trạch hiện có tỷ lệ công nghiệp chiếm <strong>58%</strong>, nông nghiệp giảm chỉ còn 8%.
    </p>

    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-blue-800 mb-2 md:mb-3">🏭 Thống kê khu công nghiệp</h3>
        <ul class="space-y-2 text-sm md:text-base text-blue-900">
            <li>• <strong>9 khu công nghiệp</strong> + 2 cụm công nghiệp</li>
            <li>• Tổng diện tích: <strong>3.600 ha</strong></li>
            <li>• Gần <strong>500 dự án</strong> đầu tư</li>
            <li>• <strong>361 dự án FDI</strong> với tổng vốn 9,3 tỷ USD</li>
            <li>• Thu hút hàng trăm nghìn lao động và hơn <strong>5.000 chuyên gia</strong></li>
        </ul>
    </div>

    <figure class="my-5 md:my-8">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800" alt="Khu công nghiệp Nhơn Trạch" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-xs md:text-sm mt-2 italic">Khu công nghiệp Nhơn Trạch II - Nhơn Phú. Ảnh minh họa</figcaption>
    </figure>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Tập trung nhiều cảng biển, trung tâm logistics</h2>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Đáp ứng nhu cầu xuất - nhập khẩu hàng hóa cho doanh nghiệp trong các khu công nghiệp lớn, Nhơn Trạch là thị trường sôi động cho các cảng hoạt động. Trên địa bàn tỉnh Đồng Nai có quy hoạch <strong>44 cảng</strong> thì đa phần xoay quanh Nhơn Trạch.
    </p>

    <div class="bg-green-50 border border-green-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-green-800 mb-2 md:mb-3">🚢 Hệ thống cảng và logistics</h3>
        <ul class="space-y-2 text-sm md:text-base text-green-900">
            <li>• Gần cảng <strong>Cái Mép</strong> - cảng trọng điểm phía Nam</li>
            <li>• Khu dịch vụ hậu cần cảng Phước An: <strong>375 ha</strong></li>
            <li>• Hệ thống cảng dọc sông Nhà Bè: <strong>183 ha</strong></li>
            <li>• Gần sân bay quốc tế <strong>Long Thành</strong></li>
            <li>• Trung tâm quá cảnh hàng hóa từ Campuchia, Myanmar, Thái Lan, Lào</li>
        </ul>
    </div>

    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-3 md:p-4 my-4 md:my-6">
        <p class="text-yellow-800 text-sm md:text-base">
            📍 Đô thị mới Nhơn Trạch được quy hoạch thành <strong>khu đô thị công nghiệp - cảng</strong>, đô thị vệ tinh vùng TP HCM và hướng đến <strong>đô thị loại 2</strong>.
        </p>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Hạ tầng giao thông kết nối</h2>

    <div class="overflow-x-auto my-4 md:my-6 -mx-2 md:mx-0">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg text-sm md:text-base">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Dự án hạ tầng</th>
                    <th class="px-3 md:px-6 py-2 md:py-3 text-left font-semibold text-gray-900 border-b">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Đường 319</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Nối vào cao tốc TP HCM - Long Thành</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Đường Nguyễn Văn Ký</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Mở rộng lên 30m, trục chính đô thị</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Vành đai 3</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Đoạn Nhơn Trạch - TP HCM dài 30km</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Cao tốc Bến Lức - Long Thành</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Hòa vào hệ thống cao tốc Bắc - Nam</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Metro số 1</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Kéo dài tuyến Suối Tiên - Đồng Nai</td>
                </tr>
                <tr>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b font-semibold">Cầu Cát Lái</td>
                    <td class="px-3 md:px-6 py-2 md:py-4 text-gray-800 border-b">Kết nối xã Phú Hữu với Quận 2</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mt-6 md:mt-8 mb-3 md:mb-4">Thị trường bất động sản sôi động</h2>

    <p class="text-base text-gray-800 leading-relaxed mb-3 md:mb-4">
        Với những lợi thế này, địa ốc khu trung tâm Nhơn Trạch - bao gồm Long Thọ, Hiệp Phước đang diễn biến sôi động, đặc biệt xung quanh tuyến Hùng Vương, Nguyễn Văn Ký, đường 319, TL 25B.
    </p>

    <div class="bg-gray-100 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2 md:mb-3">🏘️ Các dự án đô thị nổi bật</h3>
        <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">Thang Long Home Hiệp Phước</span>
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">Mega City</span>
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">King Bay</span>
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">Swan Bay</span>
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">Swan Park</span>
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">Aqua City</span>
            <span class="bg-white px-3 py-1 rounded-full text-sm text-gray-700 border">Tiến Lộc Garden</span>
        </div>
    </div>

    <div class="bg-red-50 border border-red-200 rounded-lg p-4 md:p-6 my-4 md:my-6">
        <h3 class="text-base md:text-lg font-semibold text-red-800 mb-2 md:mb-3">💰 Mức giá tham khảo</h3>
        <p class="text-sm md:text-base text-red-900">
            Một số dự án có giá bán <strong>7-10 tỷ đồng</strong> mỗi căn nhà xây dựng hoàn thiện. Dãy shophouse mặt tiền đường Nguyễn Văn Ký được nhà đầu tư chú ý để kinh doanh hoặc chờ cơ hội gia tăng giá trị.
        </p>
    </div>

    <p class="text-gray-500 text-xs md:text-sm mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-200">
        <em>Nguồn: VnExpress - Tác giả: Lộc An</em>
    </p>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Sở hữu thế mạnh về công nghiệp, dịch vụ cảng, hạ tầng liên kết với TP HCM, Nhơn Trạch thu hút nhiều dự án bất động sản nhà ở.',
            'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200',
            'datePublished' => '2025-12-11T14:00:00+07:00',
            'dateModified' => '2025-12-11T14:00:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'Lộc An',
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
            'keywords' => 'Nhơn Trạch, Đồng Nai, đô thị vệ tinh, bất động sản, khu công nghiệp, cảng biển',
            'articleSection' => 'Phân tích thị trường',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Phân tích thị trường', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=market'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 1,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Sở hữu thế mạnh về công nghiệp, dịch vụ cảng, hạ tầng liên kết với TP HCM, Nhơn Trạch thu hút nhiều dự án bất động sản nhà ở.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Nhơn Trạch Đồng Nai - đô thị vệ tinh tiềm năng của TP HCM với 9 khu công nghiệp, hệ thống cảng biển, hạ tầng giao thông kết nối. Thị trường BĐS sôi động.',
            'meta_keywords' => 'Nhơn Trạch, Đồng Nai, đô thị vệ tinh TP HCM, bất động sản Nhơn Trạch, khu công nghiệp, cảng Cái Mép, sân bay Long Thành',
            'og_title' => $title,
            'og_description' => 'Sở hữu thế mạnh về công nghiệp, dịch vụ cảng, hạ tầng liên kết với TP HCM, Nhơn Trạch thu hút nhiều dự án bất động sản nhà ở.',
            'og_image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200',
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

        // Link to post type (market - Phân tích thị trường)
        $marketType = DB::table('post_types')->where('code', 'market')->first();
        if ($marketType) {
            DB::table('post_post_types')->insert([
                'post_id' => $postId,
                'post_type_id' => $marketType->id,
            ]);
        }

        // Link to tags
        $tagCodes = ['thi-truong', 'dong-nai', 'dat-nen'];
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
