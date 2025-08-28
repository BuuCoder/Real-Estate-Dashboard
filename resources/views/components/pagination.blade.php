@if ($paginator->hasPages())
    <nav class="mt-6 flex items-center justify-center gap-1" role="navigation" aria-label="Phân trang">
        {{-- Số trang: chỉ hiển thị trang hiện tại và 2 trang liền kề --}}
        @php
            $currentPage = $paginator->currentPage();
            $lastPage = $paginator->lastPage();
            $start = max(1, $currentPage - 2);
            $end = min($lastPage, $currentPage + 2);
        @endphp

        @if ($start > 1)
            <a href="{{ $paginator->url(1) }}"
            class="w-10 flex justify-center px-3 py-2 rounded-lg border-none text-gray-500 bg-gray-100 hover:bg-brand-700 hover:text-white transition">1</a>
            @if ($start > 2)
            <span class="px-3 py-2 text-gray-400">...</span>
            @endif
        @endif

        @for ($page = $start; $page <= $end; $page++)
            @if ($page == $currentPage)
            <span class="w-10 flex justify-center px-3 py-2 rounded-lg bg-brand-600 text-white font-bold">{{ $page }}</span>
            @else
            <a href="{{ $paginator->url($page) }}"
                class="w-10 flex justify-center px-3 py-2 rounded-lg border-none text-gray-500 bg-gray-100 hover:bg-brand-700 hover:text-white transition">{{ $page }}</a>
            @endif
        @endfor

        @if ($end < $lastPage)
            @if ($end < $lastPage - 1)
            <span class="px-3 py-2 text-gray-400">...</span>
            @endif
            <a href="{{ $paginator->url($lastPage) }}"
            class="w-10 flex justify-center px-3 py-2 rounded-lg border-none text-gray-500 bg-gray-100 hover:bg-brand-700 hover:text-white transition">{{ $lastPage }}</a>
        @endif
    </nav>

    {{-- Hiển thị range --}}
    <div class="mt-2 text-center text-sm text-white/60">
        Hiển thị
        <span class="font-semibold">{{ $paginator->firstItem() }}</span>–<span
            class="font-semibold">{{ $paginator->lastItem() }}</span>
        trong <span class="font-semibold">{{ $paginator->total() }}</span> kết quả
    </div>

    <div class="mt-2 text-center text-sm text-black/60">
        Hiển thị
        <span class="font-semibold">{{ $paginator->firstItem() }}</span>–<span
            class="font-semibold">{{ $paginator->lastItem() }}</span>
        trong <span class="font-semibold">{{ $paginator->total() }}</span> kết quả
        (đang hiển thị <span class="font-semibold">{{ $paginator->lastItem() - $paginator->firstItem() + 1 }}</span>
        mục)
    </div>
@endif
