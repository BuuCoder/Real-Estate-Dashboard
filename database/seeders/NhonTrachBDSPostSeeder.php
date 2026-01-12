<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NhonTrachBDSPostSeeder extends Seeder
{
    public function run(): void
    {
        $this->createNhonTrachBDSPost();
    }

    private function createNhonTrachBDSPost(): void
    {
        $title = 'Loạt dự án lớn khởi động, thị trường bất động sản Nhơn Trạch (Đồng Nai) tiếp tục hút dòng tiền đầu tư phía Bắc';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-10-06 14:28:00');

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
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Loạt dự án lớn khởi động, thị trường bất động sản Nhơn Trạch (Đồng Nai) tiếp tục hút dòng tiền đầu tư phía Bắc</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Lượng người mua ở thực tăng mạnh tại Nhơn Trạch, thay vì phần lớn hoạt động đầu cơ như đợt sốt đất trước đây. Các dự án quy mô lớn rục rịch khởi động lại sau thời gian im ắng.
        </p>
    </div>

    <!-- Quick facts -->
    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Khu vực</p>
            </div>
            <p class="text-sm text-emerald-950">Nhơn Trạch, Đồng Nai</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Giá đất</p>
            </div>
            <p class="text-sm text-emerald-950">18 - 35 triệu/m²</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Cầu Cát Lái</p>
            </div>
            <p class="text-sm text-emerald-950">Khởi công 2026</p>
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
            <span class="text-xs text-emerald-700">Nguồn: Nhịp sống kinh doanh</span>
        </div>
        <div class="mt-4" id="gallery-grid">
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1768013823/L%C6%B0%E1%BB%A3ng_ng%C6%B0%E1%BB%9Di_mua_%E1%BB%9F_th%E1%BB%B1c_t%C4%83ng_m%E1%BA%A1nh_t%E1%BA%A1i_Nh%C6%A1n_Tr%E1%BA%A1ch_utnl2a.jpg" alt="Lượng người mua ở thực tăng mạnh tại Nhơn Trạch" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Lượng người mua ở thực tăng mạnh tại Nhơn Trạch, thay vì phần lớn hoạt động đầu cơ như đợt sốt đất trước đây.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Dự án quy mô tái khởi động</h2>

            <p>Trở lại thị trường Nhơn Trạch (Đồng Nai) gần đây nhận thấy, bất động sản nơi đây nhu cầu tăng nhịp nhờ thông tin hạ tầng trọng điểm sắp khởi công và loạt dự án quy mô lớn rục rịch khởi động lại sau thời gian im ắng.</p>

            <p>Các dự án tái khởi động, làm mới chiến lược bán hàng nhằm đón đầu sức nóng của các dự án hạ tầng sắp khởi công, điển hình là cầu Cát Lái (sẽ được khởi công vào năm 2026).</p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Dự án Sunflower - Khu đô thị mới Phước An</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Quy mô:</strong> 150ha tại trung tâm khu đô thị mới Phước An</li>
                    <li>• <strong>Quy hoạch:</strong> Nhà ở thấp tầng, cao tầng, công viên, trường học, TTTM</li>
                    <li>• <strong>Chủ đầu tư:</strong> HUD, HUD Sài Gòn, Thăng Long Real, Phúc Khang</li>
                    <li>• <strong>Giai đoạn tiếp theo:</strong> Dự kiến triển khai từ tháng 1/2026</li>
                </ul>
            </div>

            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer my-4">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1768013824/Khu_400_c%C4%83n_do_HUD_S%C3%A0i_G%C3%B2n_%C4%91ang_tri%E1%BB%83n_khai_x%C3%A2y_d%E1%BB%B1ng_jmg7fe.jpg" alt="Khu 400 căn do HUD Sài Gòn đang triển khai xây dựng" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Khu 400 căn do HUD Sài Gòn đang triển khai xây dựng đã hoàn thiện và cư dân về sinh sống. Mức giá dao động từ 2,8 - 2,9 tỷ/căn.</figcaption>
            </figure>

            <p>Hiện nay, Công ty Cổ phần Đầu tư Phát triển Nhà và Đô thị HUD Sài Gòn đang triển khai xây dựng 400 căn nhà thấp tầng, chủ yếu là nhà phố liên kế và biệt thự, hướng tới phục vụ nhu cầu ở thực đang gia tăng trong khu vực Nhơn Trạch. Mức giá tại đây dao động từ 2,8 - 2,9 tỷ/căn 1 trệt 2 lầu, hoàn thiện ngoài giao thô bên trong.</p>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <h3 class="font-semibold text-green-800">Nhà ở xã hội chuẩn Singapore</h3>
                </div>
                <ul class="list-none space-y-2 text-green-900">
                    <li>• <strong>Khởi công:</strong> Cuối tháng 9/2025</li>
                    <li>• <strong>Quy mô:</strong> 7 dự án với gần 8.000 căn hộ mới</li>
                    <li>• <strong>Tại Phước An:</strong> 2 dự án với gần 3.300 căn hộ</li>
                    <li>• <strong>Đối tượng:</strong> Lao động tại KCN Nhơn Trạch 2, Gò Dầu, cụm cảng Phước An</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Nhu cầu bất động sản gia tăng tại Phước An, Phú Hữu, Phú Đông, Đại Phước</h2>

            <p>Theo ghi nhận, lượng người mua ở thực có dấu hiệu tăng lên tại thị trường bất động sản Phước An. Khảo sát từ các sàn giao dịch cho thấy, tỷ lệ khách hàng mua để xây nhà, an cư chiếm khoảng 60–70% trong các giao dịch gần đây – đặc biệt là tại phân khu đang xây dựng của HUD Sài Gòn.</p>

            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer my-4">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dgnghtfxa/image/upload/v1768013823/D%C3%B2ng_ti%E1%BB%81n_%C4%91%E1%BA%A7u_t%C6%B0_ph%C3%ADa_B%E1%BA%AFc_nmit0z.jpg" alt="Dòng tiền đầu tư phía Bắc đổ về Nhơn Trạch" class="h-64 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Dòng tiền đầu tư phía Bắc, đặc biệt là Hà Nội tiếp tục đổ về Nhơn Trạch.</figcaption>
            </figure>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Dòng tiền đầu tư phía Bắc</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• Dòng tiền từ Hà Nội, Hải Phòng, Bắc Ninh tiếp tục đổ về Nhơn Trạch</li>
                    <li>• Nhu cầu mua đầu tư trung dài hạn chiếm nhiều hơn so với lướt sóng</li>
                    <li>• Nhà đầu tư chuộng đất nền, nhà phố có pháp lý rõ ràng</li>
                    <li>• Ưu tiên dự án do chủ đầu tư lớn phát triển, quy hoạch bài bản</li>
                </ul>
            </div>

            <p>Theo chia sẻ của một nhà đầu tư Hà Nội, hiện anh quan tâm bất động sản Phước An vì rất giống Long Biên 15 năm trước nên xác định đầu tư dài hạn, chờ cơ hội.</p>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Hạ tầng trọng điểm - Động lực tăng trưởng</h2>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                    <h3 class="font-semibold text-purple-800">Các công trình hạ tầng trọng điểm</h3>
                </div>
                <ul class="list-none space-y-2 text-purple-900">
                    <li>• <strong>Cảng tổng hợp Phước An:</strong> Giai đoạn 1 đang thi công</li>
                    <li>• <strong>Cao tốc Bến Lức – Long Thành:</strong> Sắp về đích</li>
                    <li>• <strong>Vành đai 3 TP.HCM:</strong> Sắp hoàn thành</li>
                    <li>• <strong>Cầu Cát Lái:</strong> Khởi công đầu năm 2026</li>
                    <li>• <strong>Hệ thống giao thông nội khu:</strong> Đang được nâng cấp</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Giá đất tăng nhẹ, giao dịch tăng mạnh</h2>

            <p>Theo ghi nhận từ các sàn giao dịch địa phương, lượng khách tìm mua đất nền, nhà phố tại Nhơn Trạch tăng rõ rệt trong vòng vài tuần qua, kể từ khi thông tin xây cầu được xác nhận.</p>

            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Biến động giá đất</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Phú Hữu, Phú Đông, Đại Phước:</strong> Tăng 5 – 10%</li>
                    <li>• <strong>Giá đất Nhơn Trạch:</strong> 18 – 35 triệu/m² (tùy vị trí)</li>
                    <li>• <strong>So sánh TP.Thủ Đức:</strong> Đã vượt mốc 100 triệu/m²</li>
                    <li>• <strong>Khu vực tăng mạnh:</strong> Gần trục đường Lý Thái Tổ, giáp ranh TP.Thủ Đức</li>
                </ul>
            </div>

            <p>Khi hoàn thành, cầu Cát Lái sẽ rút ngắn thời gian di chuyển từ Nhơn Trạch vào trung tâm TP.HCM còn khoảng 20 – 25 phút, thay vì phụ thuộc vào phà Cát Lái như hiện nay. Đây là yếu tố được giới chuyên gia đánh giá là "cú hích" mạnh mẽ cho thị trường bất động sản khu vực.</p>

            <div class="bg-red-50 border border-red-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <h3 class="font-semibold text-red-800">Lưu ý cho nhà đầu tư</h3>
                </div>
                <p class="text-red-900">Theo các chuyên gia, nhà đầu tư cần sự tỉnh táo, chọn lọc sản phẩm pháp lý rõ ràng, tránh chạy theo tâm lý đám đông ở giai đoạn này. Đô thị Mới Phước An vẫn cần thời gian để hoàn thiện hạ tầng, tiện ích, và đặc biệt là xây dựng cộng đồng cư dân lâu dài.</p>
            </div>

            <p>Đô thị Mới Phước An đang từng bước thoát khỏi trạng thái "chờ quy hoạch" để bước vào giai đoạn triển khai thực tế. Một số dự án lớn triển khai và nhu cầu người mua ở thực xuất hiện đã và đang cho thấy những dấu hiệu phục hồi rõ ràng và bền vững của thị trường Nhơn Trạch.</p>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://nhipsongkinhdoanh.vn/loat-du-an-lon-khoi-dong--thi-truong-bat-dong-san-nhon-trach--dong-nai--tiep-tuc-hut-dong-tien-dau-tu-phia-bac-21368.htm" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">Nhịp sống kinh doanh</a>
            </p>    
        </div>
    </div>
</article>
HTML;


        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => 'Lượng người mua ở thực tăng mạnh tại Nhơn Trạch, các dự án quy mô lớn rục rịch khởi động lại sau thời gian im ắng, dòng tiền đầu tư phía Bắc tiếp tục đổ về.',
            'image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1768013823/L%C6%B0%E1%BB%A3ng_ng%C6%B0%E1%BB%9Di_mua_%E1%BB%9F_th%E1%BB%B1c_t%C4%83ng_m%E1%BA%A1nh_t%E1%BA%A1i_Nh%C6%A1n_Tr%E1%BA%A1ch_utnl2a.jpg',
            'datePublished' => '2025-10-06T14:28:00+07:00',
            'dateModified' => '2025-10-06T14:28:00+07:00',
            'author' => ['@type' => 'Person', 'name' => 'Nhịp sống kinh doanh'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Phát Đạt Bất Động Sản',
                'logo' => ['@type' => 'ImageObject', 'url' => 'https://phatdatbatdongsan.com/images/logo.png'],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
            'keywords' => 'bất động sản Nhơn Trạch, Đồng Nai, cầu Cát Lái, dự án Sunflower, HUD Sài Gòn, đầu tư bất động sản',
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
            'summary' => 'Lượng người mua ở thực tăng mạnh tại Nhơn Trạch, thay vì phần lớn hoạt động đầu cơ như đợt sốt đất trước đây. Các dự án quy mô lớn rục rịch khởi động lại sau thời gian im ắng.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1768013823/L%C6%B0%E1%BB%A3ng_ng%C6%B0%E1%BB%9Di_mua_%E1%BB%9F_th%E1%BB%B1c_t%C4%83ng_m%E1%BA%A1nh_t%E1%BA%A1i_Nh%C6%A1n_Tr%E1%BA%A1ch_utnl2a.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => 'Thị trường BĐS Nhơn Trạch hút dòng tiền đầu tư phía Bắc | Phát Đạt Bất Động Sản',
            'meta_description' => 'Loạt dự án lớn khởi động, thị trường bất động sản Nhơn Trạch tiếp tục hút dòng tiền đầu tư từ Hà Nội, Hải Phòng, Bắc Ninh. Cầu Cát Lái khởi công 2026.',
            'meta_keywords' => 'bất động sản Nhơn Trạch, Đồng Nai, cầu Cát Lái, dự án Sunflower, HUD Sài Gòn, đầu tư bất động sản, Phước An',
            'og_title' => $title,
            'og_description' => 'Lượng người mua ở thực tăng mạnh tại Nhơn Trạch, các dự án quy mô lớn rục rịch khởi động lại sau thời gian im ắng.',
            'og_image' => 'https://res.cloudinary.com/dgnghtfxa/image/upload/v1768013823/L%C6%B0%E1%BB%A3ng_ng%C6%B0%E1%BB%9Di_mua_%E1%BB%9F_th%E1%BB%B1c_t%C4%83ng_m%E1%BA%A1nh_t%E1%BA%A1i_Nh%C6%A1n_Tr%E1%BA%A1ch_utnl2a.jpg',
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
        $tagCodes = ['thi-truong-bat-dong-san', 'nhon-trach', 'dong-nai', 'dau-tu'];
        $tagNames = [
            'thi-truong-bat-dong-san' => 'Thị trường bất động sản',
            'nhon-trach' => 'Nhơn Trạch',
            'dong-nai' => 'Đồng Nai',
            'dau-tu' => 'Đầu tư'
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
