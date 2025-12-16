<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GeneratePostContent extends Command
{
    protected $signature = 'post:generate-content 
                            {--title= : Tiêu đề bài viết}
                            {--description= : Mô tả ngắn về nội dung}
                            {--images= : Danh sách URL ảnh, cách nhau bởi dấu phẩy}
                            {--captions= : Chú thích cho từng ảnh, cách nhau bởi dấu |}
                            {--category=news : Loại bài viết (news, infrastructure, market, project)}
                            {--color=emerald : Màu chủ đạo (emerald, blue, amber, rose)}
                            {--output= : File output (nếu không có sẽ in ra console)}';

    protected $description = 'Tạo content HTML cho bài đăng từ description và ảnh';

    private array $colorSchemes = [
        'emerald' => [
            'primary' => 'emerald',
            'bg' => 'emerald-50',
            'border' => 'emerald-100',
            'text' => 'emerald-900',
            'accent' => 'emerald-600',
        ],
        'blue' => [
            'primary' => 'blue',
            'bg' => 'blue-50',
            'border' => 'blue-100',
            'text' => 'blue-900',
            'accent' => 'blue-600',
        ],
        'amber' => [
            'primary' => 'amber',
            'bg' => 'amber-50',
            'border' => 'amber-100',
            'text' => 'amber-900',
            'accent' => 'amber-600',
        ],
        'rose' => [
            'primary' => 'rose',
            'bg' => 'rose-50',
            'border' => 'rose-100',
            'text' => 'rose-900',
            'accent' => 'rose-600',
        ],
    ];

    public function handle(): int
    {
        $title = $this->option('title') ?: $this->ask('Nhập tiêu đề bài viết');
        $description = $this->option('description') ?: $this->ask('Nhập mô tả nội dung');
        $imagesInput = $this->option('images') ?: $this->ask('Nhập danh sách URL ảnh (cách nhau bởi dấu phẩy)');
        $captionsInput = $this->option('captions') ?: $this->ask('Nhập chú thích ảnh (cách nhau bởi dấu |)', '');
        $category = $this->option('category');
        $color = $this->option('color');

        $images = array_map('trim', explode(',', $imagesInput));
        $captions = $captionsInput ? array_map('trim', explode('|', $captionsInput)) : [];

        // Đảm bảo số caption = số ảnh
        while (count($captions) < count($images)) {
            $captions[] = 'Hình ảnh minh họa';
        }

        $content = $this->generateContent($title, $description, $images, $captions, $category, $color);

        if ($output = $this->option('output')) {
            file_put_contents($output, $content);
            $this->info("Đã lưu content vào: {$output}");
        } else {
            $this->line($content);
        }

        $this->info('✅ Tạo content thành công!');
        return Command::SUCCESS;
    }

    private function generateContent(
        string $title,
        string $description,
        array $images,
        array $captions,
        string $category,
        string $color
    ): string {
        $scheme = $this->colorSchemes[$color] ?? $this->colorSchemes['emerald'];
        $c = $scheme['primary'];

        $categoryLabels = [
            'news' => 'Tin tức',
            'infrastructure' => 'Hạ tầng giao thông',
            'market' => 'Thị trường',
            'project' => 'Dự án',
        ];
        $categoryLabel = $categoryLabels[$category] ?? 'Tin tức';

        $galleryHtml = $this->generateGallery($images, $captions, $c);
        $slideshowScript = $this->generateSlideshowScript($images, $captions);

        return <<<HTML
<article class="font-sans max-w-none text-base text-gray-800">
    <!-- Header -->
    <div class="mb-6">
        <p class="inline-flex items-center gap-2 rounded-full bg-{$c}-100 px-3 py-1 text-xs font-medium text-{$c}-800">
            <svg class="w-3 h-3 text-{$c}-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            {$categoryLabel}
        </p>
        <h1 class="mt-3 text-lg font-semibold tracking-tight text-{$c}-950 sm:text-xl">{$title}</h1>
        <p class="mt-2 text-sm leading-6 text-{$c}-900/80">
            {$description}
        </p>
    </div>

    <!-- Gallery -->
    <div class="rounded-2xl border border-{$c}-100 bg-white p-4 sm:p-5">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-{$c}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h2 class="text-sm font-semibold text-{$c}-950">Hình ảnh</h2>
            </div>
        </div>
        <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-3" id="gallery-grid">
{$galleryHtml}
        </div>
    </div>

    <!-- Slideshow Modal -->
    <div id="slideshow-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center">
        <div class="relative max-w-4xl max-h-full p-4">
            <button onclick="closeSlideshow()" class="absolute top-4 right-4 z-10 text-white hover:text-gray-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <button onclick="previousImage()" class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button onclick="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            <div class="text-center">
                <img id="slideshow-image" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-lg">
                <p id="slideshow-caption" class="mt-4 text-sm text-white"></p>
                <p id="slideshow-counter" class="text-xs text-gray-300 mt-2"></p>
            </div>
        </div>
    </div>

{$slideshowScript}
</article>
HTML;
    }

    private function generateGallery(array $images, array $captions, string $color): string
    {
        $html = '';
        $count = count($images);

        foreach ($images as $index => $imageUrl) {
            $caption = $captions[$index] ?? 'Hình ảnh minh họa';
            $altText = "Ảnh " . ($index + 1);
            $isLast = ($index === $count - 1) && ($count > 1);
            $spanClass = $isLast ? ' sm:col-span-2 lg:col-span-3' : '';
            $imgHeight = $isLast ? 'h-52' : 'h-44';

            $html .= <<<FIGURE
            <figure class="group overflow-hidden rounded-xl border border-{$color}-100 bg-{$color}-50 cursor-pointer{$spanClass}" onclick="openSlideshow({$index})">
                <div class="relative">
                    <img src="{$imageUrl}" alt="{$altText}" class="{$imgHeight} w-full object-cover transition duration-300 group-hover:scale-[1.02]" loading="lazy" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </div>
                </div>
                <figcaption class="px-3 py-2 text-xs text-{$color}-900/80">{$caption}</figcaption>
            </figure>

FIGURE;
        }

        return $html;
    }

    private function generateSlideshowScript(array $images, array $captions): string
    {
        $imagesJson = [];
        foreach ($images as $index => $url) {
            $imagesJson[] = [
                'src' => $url,
                'alt' => 'Ảnh ' . ($index + 1),
                'caption' => $captions[$index] ?? 'Hình ảnh minh họa',
            ];
        }
        $jsonData = json_encode($imagesJson, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        return <<<SCRIPT
    <script>
        const images = {$jsonData};
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
            const img = images[currentImageIndex];
            document.getElementById('slideshow-image').src = img.src;
            document.getElementById('slideshow-image').alt = img.alt;
            document.getElementById('slideshow-caption').textContent = img.caption;
            document.getElementById('slideshow-counter').textContent = (currentImageIndex + 1) + ' / ' + images.length;
        }

        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('slideshow-modal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') closeSlideshow();
                else if (e.key === 'ArrowLeft') previousImage();
                else if (e.key === 'ArrowRight') nextImage();
            }
        });

        document.getElementById('slideshow-modal').addEventListener('click', function(e) {
            if (e.target === this) closeSlideshow();
        });
    </script>
SCRIPT;
    }
}
