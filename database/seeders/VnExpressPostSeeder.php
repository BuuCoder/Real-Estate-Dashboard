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
        $this->createCauPhuocKhanhPost();
    }


    private function createCauPhuocKhanhPost(): void
    {
        $title = 'Cận cảnh cầu Phước Khánh trên cao tốc Bến Lức – Long Thành sắp về đích';
        $slug = Str::slug($title);
        $publishedAt = Carbon::parse('2025-12-16 14:30:00');

        $content = <<<'HTML'
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Tiến độ dự án
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-emerald-950 sm:text-xl">Cận cảnh cầu Phước Khánh trên cao tốc Bến Lức – Long Thành sắp về đích</h1>
        <p class="mt-2 text-sm leading-6 text-emerald-900/80">
            Sau thời gian dài gián đoạn, cầu Phước Khánh (bắc qua sông Lòng Tàu, kết nối Cần Giờ – Nhơn Trạch) đang được đẩy nhanh thi công. Các mốc lắp đặt cáp dây văng và hoàn thiện kết cấu đang giúp công trình tiến gần "vạch đích", tạo kỳ vọng khép kín toàn tuyến cao tốc Bến Lức – Long Thành.
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
                <p class="text-xs font-medium text-emerald-700">Vị trí</p>
            </div>
            <p class="text-sm text-emerald-950">Sông Lòng Tàu • Cần Giờ (TP.HCM) ↔ Nhơn Trạch (Đồng Nai)</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Vai trò</p>
            </div>
            <p class="text-sm text-emerald-950">Hạng mục then chốt để khép kín tuyến cao tốc</p>
        </div>
        <div class="rounded-xl border border-emerald-100 bg-white p-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <p class="text-xs font-medium text-emerald-700">Kỳ vọng</p>
            </div>
            <p class="text-sm text-emerald-950">Giảm tải trục giao thông, hỗ trợ logistics & liên kết vùng</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-emerald-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-emerald-950">Hình ảnh cập nhật</h2>
            </div>
            <span class="text-xs text-emerald-700">Nguồn: ảnh bạn cung cấp</span>
        </div>
        <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-3" id="gallery-grid">
            <!-- 1 -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer" onclick="openSlideshow(0)">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/ac6aa21c5255bb0be244_ymul2b.jpg" alt="Cầu Phước Khánh - ảnh 1" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Góc nhìn tổng quan công trình đang thi công.</figcaption>
            </figure>
            <!-- 2 -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer" onclick="openSlideshow(1)">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/416b401db054590a0045_zlmapp.jpg" alt="Cầu Phước Khánh - ảnh 2" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Hình hài cầu ngày càng rõ nét giữa dòng sông.</figcaption>
            </figure>
            <!-- 3 -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer" onclick="openSlideshow(2)">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/25c22eb4defd37a36eec_qe3pg7.jpg" alt="Cầu Phước Khánh - ảnh 3" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Chi tiết kết cấu và khu vực thi công.</figcaption>
            </figure>
            <!-- 4 -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer" onclick="openSlideshow(3)">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/5e205856a81f4141180e_t6u0zg.jpg" alt="Cầu Phước Khánh - ảnh 4" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Nhịp cầu và hạng mục liên quan đang được tăng tốc.</figcaption>
            </figure>
            <!-- 5 -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 cursor-pointer" onclick="openSlideshow(4)">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/e8c3e8b518fcf1a2a8ed_qts0bp.jpg" alt="Cầu Phước Khánh - ảnh 5" class="h-44 w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Khu vực trụ/cụm thi công nhìn cận cảnh.</figcaption>
            </figure>
            <!-- 6 -->
            <figure class="group overflow-hidden rounded-xl border border-emerald-100 bg-emerald-50 sm:col-span-2 lg:col-span-3 cursor-pointer" onclick="openSlideshow(5)">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dsiier5sg/image/upload/v1765872513/9db199c7698e80d0d99f_qbgp1j.jpg" alt="Cầu Phước Khánh - ảnh 6" class="h-52 w-full object-cover transition duration-300 group-hover:scale-[1.01]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c0-1.1-.9-2-2-2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-emerald-900/80">Toàn cảnh dự án — kỳ vọng sớm khép kín tuyến cao tốc Bến Lức – Long Thành.</figcaption>
            </figure>
        </div>

        <!-- Body -->
        <div class="mt-6 space-y-4 text-sm leading-6 text-emerald-900/80">
            <p>
                Cầu Phước Khánh là hạng mục "nút thắt" cuối cùng của tuyến cao tốc Bến Lức – Long Thành. Khi hoàn thiện, tuyến đường sẽ tăng khả năng kết nối liên vùng giữa Tây Nam Bộ và Đông Nam Bộ, đồng thời hỗ trợ vận tải hàng hoá, giảm áp lực cho các trục đường hiện hữu.
            </p>
            
            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="font-semibold text-emerald-800">Thông số kỹ thuật cầu Phước Khánh</h3>
                </div>
                <ul class="list-none space-y-2 text-emerald-900">
                    <li>• <strong>Chiều dài:</strong> 1.875m (cầu chính 420m)</li>
                    <li>• <strong>Chiều rộng:</strong> 23m (4 làn xe)</li>
                    <li>• <strong>Loại cầu:</strong> Cầu dây văng bê tông cốt thép</li>
                    <li>• <strong>Khoảng thông thuyền:</strong> 120m, cao 42m</li>
                    <li>• <strong>Tổng mức đầu tư:</strong> Khoảng 2.800 tỷ đồng</li>
                </ul>
            </div>

            <p>
                Trong giai đoạn nước rút, các đầu việc quan trọng thường tập trung vào hoàn thiện kết cấu nhịp, hệ dây văng, mặt cầu và hạng mục an toàn giao thông. Tiến độ thực tế có thể thay đổi theo điều kiện thi công và công tác điều phối, nhưng tín hiệu chung là công trường đang được thúc đẩy mạnh để sớm đưa công trình vào khai thác.
            </p>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="font-semibold text-blue-800">Ý nghĩa khi hoàn thành</h3>
                </div>
                <ul class="list-none space-y-2 text-blue-900">
                    <li>• <strong>Kết nối vùng:</strong> Liên thông Tây Nam Bộ - Đông Nam Bộ</li>
                    <li>• <strong>Logistics:</strong> Hỗ trợ vận chuyển hàng hóa từ cảng Cái Mép - Thị Vải</li>
                    <li>• <strong>Giao thông:</strong> Giảm tải cho quốc lộ 51 và các tuyến hiện hữu</li>
                    <li>• <strong>Phát triển:</strong> Thúc đẩy kinh tế khu vực Cần Giờ - Nhơn Trạch</li>
                </ul>
            </div>

            <h2 class="text-lg font-bold text-emerald-950 mt-6 mb-3">Tác động đến thị trường bất động sản</h2>
            
            <p>
                Việc cầu Phước Khánh sắp hoàn thành tạo ra nhiều cơ hội đầu tư bất động sản tại khu vực Nhơn Trạch (Đồng Nai) và Cần Giờ (TP.HCM). Kết nối giao thông thuận lợi sẽ thúc đẩy phát triển các dự án logistics, khu công nghiệp và khu đô thị mới.
            </p>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 my-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <h3 class="font-semibold text-amber-800">Cơ hội đầu tư bất động sản</h3>
                </div>
                <ul class="list-none space-y-2 text-amber-900">
                    <li>• <strong>Đất nền:</strong> Khu vực Nhơn Trạch, Long Thành có tiềm năng tăng giá</li>
                    <li>• <strong>Kho bãi:</strong> Phục vụ logistics từ cảng Cái Mép - Thị Vải</li>
                    <li>• <strong>Khu công nghiệp:</strong> Thu hút đầu tư sản xuất, gia công</li>
                    <li>• <strong>Nhà ở:</strong> Đáp ứng nhu cầu an cư của lao động</li>
                </ul>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-emerald-700">
                Nguồn tham khảo: 
                <a href="https://znews.vn" target="_blank" rel="nofollow noopener" class="font-medium text-emerald-600 hover:underline">
                    ZNews
                </a>
            </p>    
        </div>
    </div>

    <!-- Image Slideshow Modal -->
    <div id="slideshow-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center">
        <div class="relative max-w-4xl max-h-full p-4">
            <!-- Close Button -->
            <button onclick="closeSlideshow()" class="absolute top-4 right-4 z-10 text-white hover:text-gray-300 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            
            <!-- Previous Button -->
            <button onclick="previousImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            
            <!-- Next Button -->
            <button onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            
            <!-- Image Container -->
            <div class="text-center">
                <img id="slideshow-image" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-lg">
                <div class="mt-4 text-white">
                    <p id="slideshow-caption" class="text-sm"></p>
                    <p id="slideshow-counter" class="text-xs text-gray-300 mt-2"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image slideshow functionality
        const images = [
            {
                src: 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/ac6aa21c5255bb0be244_ymul2b.jpg',
                alt: 'Cầu Phước Khánh - ảnh 1',
                caption: 'Góc nhìn tổng quan công trình đang thi công.'
            },
            {
                src: 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/416b401db054590a0045_zlmapp.jpg',
                alt: 'Cầu Phước Khánh - ảnh 2',
                caption: 'Hình hài cầu ngày càng rõ nét giữa dòng sông.'
            },
            {
                src: 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/25c22eb4defd37a36eec_qe3pg7.jpg',
                alt: 'Cầu Phước Khánh - ảnh 3',
                caption: 'Chi tiết kết cấu và khu vực thi công.'
            },
            {
                src: 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/5e205856a81f4141180e_t6u0zg.jpg',
                alt: 'Cầu Phước Khánh - ảnh 4',
                caption: 'Nhịp cầu và hạng mục liên quan đang được tăng tốc.'
            },
            {
                src: 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/e8c3e8b518fcf1a2a8ed_qts0bp.jpg',
                alt: 'Cầu Phước Khánh - ảnh 5',
                caption: 'Khu vực trụ/cụm thi công nhìn cận cảnh.'
            },
            {
                src: 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872513/9db199c7698e80d0d99f_qbgp1j.jpg',
                alt: 'Cầu Phước Khánh - ảnh 6',
                caption: 'Toàn cảnh dự án — kỳ vọng sớm khép kín tuyến cao tốc Bến Lức – Long Thành.'
            }
        ];

        let currentImageIndex = 0;

        function openSlideshow(index) {
            currentImageIndex = index;
            updateSlideshow();
            document.getElementById('slideshow-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeSlideshow() {
            document.getElementById('slideshow-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            updateSlideshow();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            updateSlideshow();
        }

        function updateSlideshow() {
            const image = images[currentImageIndex];
            document.getElementById('slideshow-image').src = image.src;
            document.getElementById('slideshow-image').alt = image.alt;
            document.getElementById('slideshow-caption').textContent = image.caption;
            document.getElementById('slideshow-counter').textContent = `${currentImageIndex + 1} / ${images.length}`;
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('slideshow-modal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeSlideshow();
                } else if (e.key === 'ArrowLeft') {
                    previousImage();
                } else if (e.key === 'ArrowRight') {
                    nextImage();
                }
            }
        });

        // Close modal when clicking outside the image
        document.getElementById('slideshow-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSlideshow();
            }
        });
    </script>
</article>
HTML;

        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $title,
            'description' => 'Cầu Phước Khánh bắc qua sông Lòng Tàu đang được đẩy nhanh thi công, sắp hoàn thành để khép kín tuyến cao tốc Bến Lức – Long Thành.',
            'image' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/ac6aa21c5255bb0be244_ymul2b.jpg',
            'datePublished' => '2025-12-16T14:30:00+07:00',
            'dateModified' => '2025-12-16T14:30:00+07:00',
            'author' => [
                '@type' => 'Person',
                'name' => 'ZNews',
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
            'keywords' => 'cầu Phước Khánh, cao tốc Bến Lức Long Thành, Nhơn Trạch, Cần Giờ, bất động sản',
            'articleSection' => 'Tin tức hạ tầng',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => 'https://phatdatbatdongsan.com'],
            ['name' => 'Tin tức', 'url' => 'https://phatdatbatdongsan.com/tin-tuc'],
            ['name' => 'Hạ tầng giao thông', 'url' => 'https://phatdatbatdongsan.com/tin-tuc?type=infrastructure'],
            ['name' => $title, 'url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug],
        ];

        
        $postId = DB::table('posts')->insertGetId([
            'author_id' => 4,
            'status' => 'published',
            'title' => $title,
            'slug' => $slug,
            'summary' => 'Cầu Phước Khánh bắc qua sông Lòng Tàu đang được đẩy nhanh thi công, sắp hoàn thành để khép kín tuyến cao tốc Bến Lức – Long Thành. Công trình này sẽ tạo ra nhiều cơ hội đầu tư bất động sản tại khu vực.',
            'content' => $content,
            'content_fmt' => 'html',
            'cover_image_url' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/ac6aa21c5255bb0be244_ymul2b.jpg',
            'reading_minutes' => 5,
            'locale' => 'vi',
            'published_at' => $publishedAt,
            'canonical_url' => 'https://phatdatbatdongsan.com/tin-tuc/' . $slug,
            'meta_title' => $title . ' | Phát Đạt Bất Động Sản',
            'meta_description' => 'Cận cảnh cầu Phước Khánh sắp hoàn thành trên cao tốc Bến Lức - Long Thành. Cơ hội đầu tư bất động sản khu vực Nhơn Trạch, Đồng Nai.',
            'meta_keywords' => 'cầu Phước Khánh, cao tốc Bến Lức Long Thành, Nhơn Trạch, Đồng Nai, Cần Giờ, bất động sản, hạ tầng giao thông',
            'og_title' => $title,
            'og_description' => 'Cầu Phước Khánh bắc qua sông Lòng Tàu đang được đẩy nhanh thi công, sắp hoàn thành để khép kín tuyến cao tốc.',
            'og_image' => 'https://res.cloudinary.com/dsiier5sg/image/upload/v1765872512/ac6aa21c5255bb0be244_ymul2b.jpg',
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

        // Link to post type (infrastructure - Hạ tầng giao thông)
        $infrastructureType = DB::table('post_types')->where('code', 'infrastructure')->first();
        if (!$infrastructureType) {
            // Create infrastructure post type if not exists
            $infrastructureTypeId = DB::table('post_types')->insertGetId([
                'code' => 'infrastructure',
                'name' => 'Hạ tầng giao thông',
            ]);
        } else {
            $infrastructureTypeId = $infrastructureType->id;
        }
        
        DB::table('post_post_types')->insert([
            'post_id' => $postId,
            'post_type_id' => $infrastructureTypeId,
        ]);

        // Link to tags
        $tagCodes = ['dong-nai', 'ha-tang', 'giao-thong'];
        
        // Create tags if not exist
        foreach ($tagCodes as $tagCode) {
            $tagNames = [
                'dong-nai' => 'Đồng Nai',
                'ha-tang' => 'Hạ tầng',
                'giao-thong' => 'Giao thông'
            ];
            
            $existingTag = DB::table('tags')->where('code', $tagCode)->first();
            if (!$existingTag) {
                DB::table('tags')->insert([
                    'code' => $tagCode,
                    'name' => $tagNames[$tagCode],
                ]);
            }
        }
        
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