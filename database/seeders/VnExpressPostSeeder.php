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
<article class="prose prose-lg max-w-none">
    <p class="text-xl text-gray-700 leading-relaxed mb-6">
        Từ 2026, Nhà nước sẽ thu hồi đất thêm 3 trường hợp để phát triển kinh tế - xã hội, trong đó có đất cho dự án khu thương mại tự do, trung tâm tài chính quốc tế.
    </p>

    <p class="text-gray-800 leading-relaxed mb-4">
        Với hơn 90% đại biểu tán thành, Quốc hội thông qua Nghị quyết về một số cơ chế tháo gỡ khó khăn thực hiện Luật Đất đai, sáng 11/12.
    </p>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">3 trường hợp Nhà nước thu hồi đất mới</h2>

    <p class="text-gray-800 leading-relaxed mb-4">
        Nghị quyết bổ sung thêm 3 trường hợp Nhà nước thu hồi đất để phát triển kinh tế - xã hội:
    </p>

    <ul class="list-disc list-inside space-y-3 mb-6 text-gray-800">
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

    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 my-6">
        <p class="text-blue-800 font-medium">
            Các trường hợp bổ sung này được thực hiện từ ngày 1/1/2026.
        </p>
    </div>

    <figure class="my-8">
        <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?w=800" alt="Phiên họp Quốc hội" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-sm mt-2 italic">Các đại biểu tại phiên họp sáng 11/12. Ảnh minh họa</figcaption>
    </figure>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Quy định hiện hành về thu hồi đất</h2>

    <p class="text-gray-800 leading-relaxed mb-4">
        Luật hiện hành có <span class="font-semibold">32 trường hợp</span> Nhà nước thu hồi đất để phát triển kinh tế - xã hội, được chia theo 3 nhóm chính:
    </p>

    <ul class="list-disc list-inside space-y-2 mb-6 text-gray-800">
        <li>Xây dựng công trình công cộng</li>
        <li>Trụ sở cơ quan Nhà nước</li>
        <li>Các dự án quan trọng (khu công nghiệp, cụm công nghiệp, khu công nghệ cao, hoạt động lấn biển...)</li>
    </ul>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Bảng giá đất và bồi thường</h2>

    <p class="text-gray-800 leading-relaxed mb-4">
        Theo Nghị quyết, bảng giá và hệ số điều chỉnh được áp dụng làm căn cứ bồi thường khi Nhà nước thu hồi đất. Hiện tại, việc bồi thường theo giá đất cụ thể do UBND địa phương quyết định tại thời điểm duyệt phương án bồi thường, tái định cư.
    </p>

    <div class="bg-gray-100 rounded-lg p-6 my-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-3">Quy trình xây dựng bảng giá đất:</h3>
        <ul class="space-y-2 text-gray-700">
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                Xây dựng theo loại, vị trí và khu vực đất
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                HĐND cấp tỉnh quyết định bảng giá
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                Áp dụng từ 1/1/2026
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✓</span>
                Sửa đổi, bổ sung khi cần thiết
            </li>
        </ul>
    </div>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Quy trình thông báo thu hồi đất</h2>

    <div class="overflow-x-auto my-6">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900 border-b">Loại đất</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900 border-b">Thời gian thông báo trước</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Đất nông nghiệp</td>
                    <td class="px-6 py-4 text-gray-800 border-b font-semibold">Tối thiểu 60 ngày</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Đất phi nông nghiệp (thương mại, dịch vụ)</td>
                    <td class="px-6 py-4 text-gray-800 border-b font-semibold">Tối thiểu 120 ngày</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 my-6">
        <h3 class="text-lg font-semibold text-yellow-800 mb-3">📋 Quy trình công khai và đối thoại:</h3>
        <ul class="space-y-2 text-yellow-900">
            <li>• Phương án bồi thường, hỗ trợ, tái định cư phải được niêm yết công khai trong <strong>10 ngày</strong> tại trụ sở UBND cấp xã</li>
            <li>• Trường hợp còn ý kiến không đồng thuận, nhà quản lý phải tổ chức đối thoại trong thời hạn <strong>30 ngày</strong> từ khi lấy ý kiến người dân</li>
        </ul>
    </div>

    <p class="text-gray-600 text-sm mt-8 pt-4 border-t border-gray-200">
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
    }

    private function createNhaOXaHoiPost(): void
    {
        $title = 'Hà Nội mở bán loạt nhà ở xã hội từ 10 triệu đồng một m2';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-11 09:47:00');

        $content = <<<'HTML'
<article class="prose prose-lg max-w-none">
    <p class="text-xl text-gray-700 leading-relaxed mb-6">
        Hơn 170 căn nhà xã hội đã cho thuê đủ thời hạn được thành phố chuyển sang mở bán với giá 10-15 triệu đồng một m2.
    </p>

    <p class="text-gray-800 leading-relaxed mb-4">
        Sở Xây dựng Hà Nội vừa có kế hoạch tiếp nhận hồ sơ mua lại các căn nhà ở xã hội đã cho thuê đủ thời hạn tại hai dự án. Đây là nhóm căn hộ từng nằm trong diện thuê - mua, nay được chuyển sang bán theo quy định.
    </p>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Dự án 1: Khu nhà ở xã hội Bamboo Garden</h2>

    <div class="bg-green-50 border border-green-200 rounded-lg p-6 my-6">
        <h3 class="text-lg font-semibold text-green-800 mb-3">🏠 Thông tin dự án Bamboo Garden</h3>
        <ul class="space-y-2 text-green-900">
            <li><strong>Chủ đầu tư:</strong> Công ty cổ phần Tập đoàn CEO</li>
            <li><strong>Vị trí:</strong> Khu đô thị Quốc Oai, huyện Quốc Oai (cách trung tâm gần 30 km)</li>
            <li><strong>Quy mô:</strong> Hơn 1 ha, gồm 2 tòa cao 9 tầng, 432 căn hộ</li>
            <li><strong>Tổng mức đầu tư:</strong> Hơn 242 tỷ đồng</li>
        </ul>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900 border-b">Thông tin</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900 border-b">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Số căn mở bán</td>
                    <td class="px-6 py-4 text-gray-800 border-b font-semibold">86 căn</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Diện tích</td>
                    <td class="px-6 py-4 text-gray-800 border-b">48,6 - 58,6 m²</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Giá bán</td>
                    <td class="px-6 py-4 text-green-600 border-b font-bold">~10 triệu đồng/m² (gồm VAT + phí bảo trì)</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Tổng giá căn hộ</td>
                    <td class="px-6 py-4 text-gray-800 border-b">486 - 586 triệu đồng</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Thời gian nhận hồ sơ</td>
                    <td class="px-6 py-4 text-red-600 border-b font-semibold">01/12/2025 - 15/01/2026</td>
                </tr>
            </tbody>
        </table>
    </div>

    <figure class="my-8">
        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800" alt="Khu nhà ở xã hội Bamboo Garden" class="w-full rounded-lg shadow-md" />
        <figcaption class="text-center text-gray-500 text-sm mt-2 italic">Khu nhà ở xã hội Bamboo Garden ở Quốc Oai do Công ty cổ phần Tập đoàn CEO làm chủ đầu tư. Ảnh minh họa</figcaption>
    </figure>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Dự án 2: Khu nhà xã hội Đông Hội</h2>

    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 my-6">
        <h3 class="text-lg font-semibold text-blue-800 mb-3">🏢 Thông tin dự án Đông Hội</h3>
        <ul class="space-y-2 text-blue-900">
            <li><strong>Chủ đầu tư:</strong> Công ty TNHH Thăng Long</li>
            <li><strong>Vị trí:</strong> Ô đất 5B2 khu tái định cư Đông Hội, huyện Đông Anh</li>
            <li><strong>Quy mô:</strong> Hơn 4.500 m², 1 tòa chung cư cao 30 tầng, 2 hầm, 504 căn hộ</li>
        </ul>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900 border-b">Thông tin</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900 border-b">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Số căn mở bán</td>
                    <td class="px-6 py-4 text-gray-800 border-b font-semibold">88 căn</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Diện tích</td>
                    <td class="px-6 py-4 text-gray-800 border-b">57,8 - 67,2 m²</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Giá bán</td>
                    <td class="px-6 py-4 text-green-600 border-b font-bold">~15 triệu đồng/m²</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Tổng giá căn hộ</td>
                    <td class="px-6 py-4 text-gray-800 border-b">867 triệu - hơn 1 tỷ đồng</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-gray-800 border-b">Thời gian nhận hồ sơ</td>
                    <td class="px-6 py-4 text-red-600 border-b font-semibold">01/12/2025 - 12/01/2026</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Mục tiêu phát triển nhà ở xã hội tại Hà Nội</h2>

    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 my-6">
        <p class="text-yellow-800">
            Theo đề án phát triển ít nhất <strong>1 triệu căn nhà xã hội</strong>, Hà Nội được giao làm <strong>56.200 căn</strong> đến hết 2030 - thuộc nhóm cao nhất cả nước.
        </p>
    </div>

    <p class="text-gray-800 leading-relaxed mb-4">
        Năm nay, thành phố dự kiến hoàn thành <span class="font-semibold">6 dự án</span> với hơn <span class="font-semibold">4.700 căn</span>, vượt chỉ tiêu theo năm.
    </p>

    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Xu hướng giá nhà ở xã hội</h2>

    <div class="bg-red-50 border border-red-200 rounded-lg p-6 my-6">
        <h3 class="text-lg font-semibold text-red-800 mb-3">📈 Biến động giá nhà ở xã hội</h3>
        <ul class="space-y-2 text-red-900">
            <li>• <strong>3 năm trước:</strong> Giá mở bán dưới 20 triệu đồng/m²</li>
            <li>• <strong>Hiện tại:</strong> Liên tục xuất hiện dự án 25-29,4 triệu đồng/m²</li>
            <li>• <strong>Xu hướng:</strong> Giá có xu hướng tăng từ cuối 2024 đến nay</li>
        </ul>
    </div>

    <p class="text-gray-600 text-sm mt-8 pt-4 border-t border-gray-200">
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
}
