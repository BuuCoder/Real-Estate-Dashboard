<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NhonTrachLNGPostSeeder extends Seeder
{
    public function run(): void
    {
        $this->createNhonTrachLNGPost();
    }

    private function createNhonTrachLNGPost(): void
    {
        $title = 'Khánh thành nhà máy tỷ USD "10 nhất" lần đầu tiên ở Việt Nam, Thủ tướng đánh giá là "dự án kiểu mẫu"';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2026-01-06 10:00:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Năng lượng
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Khánh thành nhà máy tỷ USD "10 nhất" lần đầu tiên ở Việt Nam, Thủ tướng đánh giá là "dự án kiểu mẫu"</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Hai nhà máy điện khí LNG Nhơn Trạch 3 và 4 tại Đồng Nai chính thức khánh thành với tổng vốn đầu tư 1,4 tỷ USD, công suất 1.624 MW - dự án điện LNG đầu tiên của Việt Nam.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Tổng vốn đầu tư</p>
            </div>
            <p class="text-sm text-emerald-950 font-semibold">1,4 tỷ USD</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Tổng công suất</p>
            </div>
            <p class="text-sm text-emerald-950 font-semibold">1.624 MW</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Sản lượng điện/năm</p>
            </div>
            <p class="text-sm text-emerald-950 font-semibold">9 tỷ kWh</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh sự kiện</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: VGP/Petrovietnam</span>
        </div>
        <div class="mt-4 grid gap-4 sm:grid-cols-2" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632713/thu-tuong-djen-du-le-khanh-thanh-va-tham-nha-may-djien-nhon-trach-3-va-nha-may-djien-nhon-trach-4_dsabmv.jpg" alt="Thủ tướng đến dự lễ khánh thành" class="h-48 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Thủ tướng đến dự lễ khánh thành và thăm Nhà máy điện Nhơn Trạch 3 và 4</figcaption>
            </figure>
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632713/thu-tuong-va-cac-djai-bieu-nghi-thuc-bam-nut-khanh-thanh-hai-nha-may_o4a0hw.jpg" alt="Nghi thức bấm nút khánh thành" class="h-48 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Thủ tướng và các đại biểu nghi thức bấm nút khánh thành hai nhà máy</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>Sáng ngày 14/12, hai nhà máy điện khí LNG Nhơn Trạch 3 và 4 tại tỉnh Đồng Nai chính thức được khánh thành. Thủ tướng Phạm Minh Chính đã dự lễ khánh thành, đồng thời gắn biển công trình chào mừng Đại hội Đảng toàn quốc lần thứ XIV.</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Thông tin dự án</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Chủ đầu tư:</strong> Tổng công ty Điện lực Dầu khí Việt Nam (PV Power)</li>
                    <li>• <strong>Tổng thầu EPC:</strong> Liên danh Lilama – Samsung C&T</li>
                    <li>• <strong>Tổng mức đầu tư:</strong> Khoảng 1,4 tỷ USD</li>
                    <li>• <strong>Kết cấu:</strong> 40.000 tấn thép, thiết bị và 120.000 m³ bê tông</li>
                </ul>
            </div>

            <figure class="my-6">
                <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632712/thu-tuong-phat-bieu-tai-le-khanh-thanh-hai-nha-may_svg8z2.jpg" alt="Thủ tướng phát biểu tại lễ khánh thành" class="w-full rounded-xl" loading="lazy" />
                <figcaption class="mt-2 text-center text-xs text-emerald-700">Thủ tướng phát biểu tại Lễ khánh thành hai nhà máy. Ảnh: VGP</figcaption>
            </figure>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Thủ tướng đánh giá là "dự án kiểu mẫu"</h2>

            <p>Phát biểu chỉ đạo tại sự kiện, Thủ tướng nêu rõ, Nhà máy điện khí Nhơn Trạch 3 và Nhơn Trạch 4 - nhà máy điện LNG đầu tiên của Việt Nam là "mảnh ghép" đặc biệt quan trọng trong củng cố, bảo đảm an ninh năng lượng quốc gia và đáp ứng yêu cầu phát triển nhanh và bền vững của đất nước trong giai đoạn mới.</p>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Phát biểu của Thủ tướng</h3>
                </div>
                <p class="text-emerald-900 italic">"Có thể nói, việc xây dựng và khánh thành là dự án kiểu mẫu, tiêu biểu về nhiều mặt, nhất là việc vượt qua mọi khó khăn, thách thức, trở ngại để hoàn thành đúng tiến độ, bảo đảm chất lượng, bảo đảm an toàn, vệ sinh môi trường và bảo đảm tái định cư một cách thỏa đáng cho người dân."</p>
            </div>

            <figure class="my-6">
                <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632711/C%E1%BB%A5m_nh%C3%A0_m%C3%A1y_%C4%91i%E1%BB%87n_kh%C3%AD_LNG_Nh%C6%A1n_Tr%E1%BA%A1ch_3_v%C3%A0_4_mfvrzp.jpg" alt="Cụm nhà máy điện khí LNG Nhơn Trạch 3 và 4" class="w-full rounded-xl" loading="lazy" />
                <figcaption class="mt-2 text-center text-xs text-emerald-700">Cụm nhà máy điện khí LNG Nhơn Trạch 3 và 4. Ảnh: Petrovietnam</figcaption>
            </figure>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Dự án điện LNG đầu tiên của Việt Nam có "10 cái nhất"</h2>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">10 cái "nhất" của dự án</h3>
                </div>
                <ol class="list-decimal list-inside space-y-2 text-amber-900">
                    <li>Dự án sử dụng nhiên liệu khí LNG <strong>đầu tiên</strong> tại Việt Nam</li>
                    <li>Dự án nhiệt điện khí có <strong>công suất lớn nhất</strong> Việt Nam: 1.624 MW</li>
                    <li>Dự án có tổ máy phát điện <strong>công suất lớn nhất</strong> Việt Nam: 812 MW</li>
                    <li>Sử dụng tua bin khí 9HA.02 của GE có <strong>công nghệ, công suất, hiệu suất cao nhất</strong> thế giới</li>
                    <li>Dự án có <strong>hiệu suất lớn nhất</strong> Việt Nam hiện nay (trên 62%)</li>
                    <li>Hoàn thành lựa chọn nhà thầu EPC trong điều kiện <strong>khó khăn nhất</strong> (Covid-19)</li>
                    <li>Thời gian lựa chọn nhà thầu EPC <strong>nhanh nhất</strong>: chỉ 11 tháng</li>
                    <li>Gói thầu EPC có tỉ lệ công việc nhà thầu trong nước <strong>cao nhất</strong> (Lilama ~40%)</li>
                    <li>Dự án điện LNG <strong>đầu tiên</strong> thu xếp vốn không có bảo lãnh Chính phủ (gần 1 tỷ USD)</li>
                    <li>Dự án có <strong>giá thành đầu tư thấp nhất</strong> tại Việt Nam đến thời điểm hiện tại</li>
                </ol>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Công nghệ hiện đại hàng đầu thế giới</h2>

            <p>Dự án được đầu tư theo chuẩn công nghệ hiện đại, sử dụng tuabin khí thế hệ 9HA.02 của GE (Mỹ). Đây là dòng tuabin có công nghệ, công suất, hiệu suất cao nhất trên thế giới hiện nay.</p>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Ưu điểm công nghệ</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• <strong>Hiệu suất:</strong> Đạt 62-64%, thuộc nhóm cao nhất hiện nay</li>
                    <li>• <strong>Tiêu chuẩn khí thải:</strong> Đáp ứng tiêu chuẩn nghiêm ngặt</li>
                    <li>• <strong>Nhiên liệu linh hoạt:</strong> Có thể đốt trộn hydrogen tới 50%</li>
                    <li>• <strong>Tương lai:</strong> Tiến tới sử dụng 100% hydrogen</li>
                </ul>
            </div>

            <figure class="my-6">
                <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632711/Ch%E1%BB%A7_t%E1%BB%8Bch_H%C4%90QT_Petrovietnam_L%C3%AA_M%E1%BA%A1nh_H%C3%B9ng_ph%C3%A1t_bi%E1%BB%83u_lw9hnt.jpg" alt="Chủ tịch HĐQT Petrovietnam Lê Mạnh Hùng phát biểu" class="w-full rounded-xl" loading="lazy" />
                <figcaption class="mt-2 text-center text-xs text-emerald-700">Chủ tịch HĐQT Petrovietnam Lê Mạnh Hùng phát biểu. Ảnh: VGP</figcaption>
            </figure>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Đóng góp quan trọng cho an ninh năng lượng quốc gia</h2>

            <p>Chủ tịch HĐQT Petrovietnam Lê Mạnh Hùng cho biết, dự án điện khí LNG 3 và 4 là dự án điện trọng điểm đầu tiên sử dụng khí LNG của Việt Nam sử dụng tua bin thế hệ mới, với hiệu suất trên 62%.</p>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Đóng góp của Petrovietnam</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Tổng số nhà máy điện:</strong> 12 nhà máy</li>
                    <li>• <strong>Tổng công suất đặt:</strong> 8.249 MW (9,3% cả nước)</li>
                    <li>• <strong>Sản lượng điện:</strong> Trên 10% tổng sản lượng điện quốc gia</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Vận hành thương mại từ đầu năm 2026</h2>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Hiệu quả kinh tế dự kiến</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Ngày vận hành thương mại:</strong> 1/1/2026</li>
                    <li>• <strong>Doanh thu dự kiến:</strong> Khoảng 25.000 tỷ đồng/năm</li>
                    <li>• <strong>Nộp ngân sách tỉnh Đồng Nai:</strong> Khoảng 1.000 tỷ đồng/năm</li>
                </ul>
            </div>

            <p>Theo Petrovietnam, dự án Nhà máy điện Nhơn Trạch 3 và 4 là mô hình mẫu cho các trung tâm điện khí LNG mà tập đoàn dự kiến phát triển trong tương lai, đặt nền móng cho kỷ nguyên điện khí hiện đại tại Việt Nam.</p>

            <p>Nhà máy sử dụng nhiên liệu LNG là tiền đề để Petrovietnam tiếp tục nghiên cứu, phát triển các trung tâm điện khí LNG trên cả nước, từ đó đảm bảo an ninh năng lượng, phát triển kinh tế của đất nước và đồng thời góp phần đạt mục tiêu phát thải ròng bằng "0" vào năm 2050.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://cafef.vn/khanh-thanh-nha-may-ty-usd-10-nhat-lan-dau-tien-o-viet-nam-thu-tuong-danh-gia-la-du-an-kieu-mau-188251214153254978.chn" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">CafeF</a>
            </p>    
        </div>
    </div>
</article>
HTML;


        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Hai nhà máy điện khí LNG Nhơn Trạch 3 và 4 tại Đồng Nai chính thức khánh thành với tổng vốn đầu tư 1,4 tỷ USD, công suất 1.624 MW.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632713/thu-tuong-djen-du-le-khanh-thanh-va-tham-nha-may-djien-nhon-trach-3-va-nha-may-djien-nhon-trach-4_dsabmv.jpg',
            'datePublished' => '2026-01-06T10:00:00+07:00',
            'dateModified' => '2026-01-06T10:00:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'CafeF'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'nhà máy điện LNG, Nhơn Trạch 3, Nhơn Trạch 4, Petrovietnam, PV Power, năng lượng sạch',
            'articleSection' => 'Năng lượng',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Năng lượng', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=energy'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Hai nhà máy điện khí LNG Nhơn Trạch 3 và 4 tại Đồng Nai chính thức khánh thành với tổng vốn đầu tư 1,4 tỷ USD, công suất 1.624 MW - dự án điện LNG đầu tiên của Việt Nam với "10 cái nhất".',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632713/thu-tuong-djen-du-le-khanh-thanh-va-tham-nha-may-djien-nhon-trach-3-va-nha-may-djien-nhon-trach-4_dsabmv.jpg',
            'reading_minutes' => 6,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Khánh thành nhà máy điện LNG Nhơn Trạch 3 và 4 - Dự án tỷ USD "10 nhất" | Phát Đạt Bất Động Sản',
            'meta_description' => 'Thủ tướng dự lễ khánh thành nhà máy điện khí LNG Nhơn Trạch 3 và 4 tại Đồng Nai - dự án 1,4 tỷ USD đầu tiên của Việt Nam với 10 cái nhất.',
            'meta_keywords' => 'nhà máy điện LNG, Nhơn Trạch 3, Nhơn Trạch 4, Petrovietnam, PV Power, năng lượng sạch, điện khí, Đồng Nai',
            'og_title' => $title,
            'og_description' => 'Hai nhà máy điện khí LNG Nhơn Trạch 3 và 4 tại Đồng Nai chính thức khánh thành với tổng vốn đầu tư 1,4 tỷ USD.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1767632713/thu-tuong-djen-du-le-khanh-thanh-va-tham-nha-may-djien-nhon-trach-3-va-nha-may-djien-nhon-trach-4_dsabmv.jpg',
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


        // Link to post type (energy - Năng lượng)
        $energyType = DB::table('post_types')->where('code', 'energy')->first();
        if (!$energyType) {
            $energyTypeId = DB::table('post_types')->insertGetId([
                'code' => 'energy',
                'name' => 'Năng lượng',
            ]);
        } else {
            $energyTypeId = $energyType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $energyTypeId,
        ]);

        // Link to tags
        $tagCodes = ['nang-luong', 'du-an-lon', 'petrovietnam', 'dien-khi-lng'];
        $tagNames = [
            'nang-luong' => 'Năng lượng',
            'du-an-lon' => 'Dự án lớn',
            'petrovietnam' => 'Petrovietnam',
            'dien-khi-lng' => 'Điện khí LNG'
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
