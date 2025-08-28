@extends('dashboard.layout')

@section('title', 'Danh sách Bài Đăng')

@section('content')
    <div class="container mx-auto py-8" x-data="{ deleteForm: null }">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl md:text-2xl font-extrabold">Danh sách Bài Đăng</h2>
            <a href="{{ route('listings.create') }}"
                class="rounded-xl bg-brand-600 text-white border border-brand-600 px-4 py-2 font-semibold hover:bg-brand-700 transition text-xs md:text-md">Thêm
                Bài Đăng</a>
        </div>
        <button type="button" id="toggleFilterBtn"
            class="rounded-xl bg-gray-600 text-white px-4 py-2 font-semibold hover:bg-gray-700 transition text-xs md:text-md flex items-center gap-2 h-10 mb-4">
            <span id="toggleFilterText">Lọc & Tìm kiếm</span>
        </button>
        <form id="filterForm" method="GET" action="{{ route('listings.index') }}" class="mb-4 flex flex-wrap items-center gap-2 max-w-2xl" style="display: none;">
            <div class="flex flex-col w-full md:w-auto">
                <label for="search" class="text-xs font-semibold mb-1">Tìm kiếm</label>
                <input type="text" id="search" name="search" value="{{ request('search') }}" placeholder="Tìm kiếm bài đăng..."
                    class="rounded-xl border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600 flex-1 h-10 w-full" />
            </div>

            <div class="flex flex-col w-full md:w-auto md:min-w-[220px]">
                <label for="price-range" class="text-xs font-semibold mb-1">Khoảng giá (VND)</label>
                <div class="flex items-center gap-2">
                    <select id="min_price" name="min_price" class="rounded-xl border border-gray-300 px-2 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600 h-10">
                        <option value="">Từ</option>
                        <option value="100000000" @if(request('min_price') == 100000000) selected @endif>100 triệu</option>
                        <option value="200000000" @if(request('min_price') == 200000000) selected @endif>200 triệu</option>
                        <option value="500000000" @if(request('min_price') == 500000000) selected @endif>500 triệu</option>
                        <option value="1000000000" @if(request('min_price') == 1000000000) selected @endif>1 tỷ</option>
                        <option value="2000000000" @if(request('min_price') == 2000000000) selected @endif>2 tỷ</option>
                        <option value="5000000000" @if(request('min_price') == 5000000000) selected @endif>5 tỷ</option>
                        <option value="10000000000" @if(request('min_price') == 10000000000) selected @endif>10 tỷ</option>
                        <option value="20000000000" @if(request('min_price') == 20000000000) selected @endif>20 tỷ</option>
                        <option value="30000000000" @if(request('min_price') == 30000000000) selected @endif>30 tỷ</option>
                        <option value="40000000000" @if(request('min_price') == 40000000000) selected @endif>40 tỷ</option>
                        <option value="50000000000" @if(request('min_price') == 50000000000) selected @endif>50 tỷ</option>
                        <option value="100000000000" @if(request('min_price') == 100000000000) selected @endif>100 tỷ</option>
                    </select>
                    <span class="mx-1 text-gray-500">-</span>
                    <select id="max_price" name="max_price" class="rounded-xl border border-gray-300 px-2 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600 h-10">
                        <option value="">Đến</option>
                        <option value="100000000" @if(request('max_price') == 100000000) selected @endif>100 triệu</option>
                        <option value="200000000" @if(request('max_price') == 200000000) selected @endif>200 triệu</option>
                        <option value="500000000" @if(request('max_price') == 500000000) selected @endif>500 triệu</option>
                        <option value="1000000000" @if(request('max_price') == 1000000000) selected @endif>1 tỷ</option>
                        <option value="2000000000" @if(request('max_price') == 2000000000) selected @endif>2 tỷ</option>
                        <option value="5000000000" @if(request('max_price') == 5000000000) selected @endif>5 tỷ</option>
                        <option value="10000000000" @if(request('max_price') == 10000000000) selected @endif>10 tỷ</option>
                        <option value="20000000000" @if(request('max_price') == 20000000000) selected @endif>20 tỷ</option>
                        <option value="30000000000" @if(request('max_price') == 30000000000) selected @endif>30 tỷ</option>
                        <option value="40000000000" @if(request('max_price') == 40000000000) selected @endif>40 tỷ</option>
                        <option value="50000000000" @if(request('max_price') == 50000000000) selected @endif>50 tỷ</option>
                        <option value="100000000000" @if(request('max_price') == 100000000000) selected @endif>100 tỷ</option>
                    </select>
                </div>
                <span id="price-error" class="text-xs text-red-500 mt-1 hidden">Giá tối thiểu không được lớn hơn giá tối đa.</span>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const minPrice = document.getElementById('min_price');
                    const maxPrice = document.getElementById('max_price');
                    const filterForm = document.getElementById('filterForm');
                    const priceError = document.getElementById('price-error');

                    function validatePriceRange(e) {
                        const min = parseInt(minPrice.value) || 0;
                        const max = parseInt(maxPrice.value) || 0;
                        if (min && max && min > max) {
                            priceError.classList.remove('hidden');
                            if (e) e.preventDefault();
                            return false;
                        } else {
                            priceError.classList.add('hidden');
                            return true;
                        }
                    }

                    minPrice.addEventListener('change', validatePriceRange);
                    maxPrice.addEventListener('change', validatePriceRange);

                    filterForm.addEventListener('submit', function(e) {
                        if (!validatePriceRange(e)) {
                            minPrice.focus();
                        }
                    });
                });
            </script>

            <div class="flex flex-col">
                <label for="sort" class="text-xs font-semibold mb-1">Sắp xếp theo</label>
                <select id="sort" name="sort" class="rounded-xl border border-gray-300 px-2 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600 h-10">
                    <option value="created_at" @if (request('sort') == 'created_at') selected @endif>Mới nhất</option>
                    <option value="price_total" @if (request('sort') == 'price_total') selected @endif>Giá</option>
                    <option value="area_land" @if (request('sort') == 'area_land') selected @endif>Diện tích</option>
                </select>
            </div>
            
            <div class="flex flex-col">
                <label for="direction" class="text-xs font-semibold mb-1">Thứ tự</label>
                <select id="direction" name="direction" class="rounded-xl border border-gray-300 px-2 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600 h-10">
                    <option value="desc" @if (request('direction') == 'desc') selected @endif>Giảm dần</option>
                    <option value="asc" @if (request('direction') == 'asc') selected @endif>Tăng dần</option>
                </select>
            </div>

            <div class="flex flex-col justify-end h-full">
                <button type="submit"
                    class="rounded-xl bg-gray-600 text-white px-4 py-2 font-semibold hover:bg-gray-700 transition text-xs md:text-md flex items-center gap-2 h-10 mt-4 md:mt-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                    </svg>
                    Tìm
                </button>
            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('toggleFilterBtn');
            const filterForm = document.getElementById('filterForm');
            const toggleText = document.getElementById('toggleFilterText');
            toggleBtn.addEventListener('click', function () {
                if (filterForm.style.display === 'none') {
                filterForm.style.display = '';
                toggleText.textContent = 'Ẩn';
                } else {
                filterForm.style.display = 'none';
                toggleText.textContent = 'Lọc & Tìm kiếm';
                }
            });
            });
        </script>

        @if (session('success'))
            <div
                class="mb-4 flex items-center rounded-lg bg-green-100 px-4 py-3 text-green-700 text-xs md:text-md font-semibold border border-green-300">
                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                {{ session('success') }}
            </div>
        @endif
        <div class="flex justify-end mb-4">
            <button id="tableViewBtn"
                class="px-4 py-2 rounded-l-xl border border-brand-600 bg-brand-600 text-white font-semibold hover:bg-brand-700 transition text-xs md:text-md">Bảng</button>
            <button id="cardViewBtn"
                class="px-4 py-2 rounded-r-xl border border-brand-600 bg-white text-brand-600 font-semibold hover:bg-brand-50 transition text-xs md:text-md">Thẻ</button>
        </div>
        <div x-ref="tableView">
            <div class="bg-white rounded-3xl shadow-panel overflow-x-auto">
                <table class="min-w-full text-xs md:text-sm">
                    <thead>
                        <tr class="text-left text-gray-500 font-semibold border-b">
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4 min-w-[150px]">Ảnh đại diện</th>
                            <th class="px-6 py-4 min-w-[100px]">Tiêu đề</th>
                            <th class="px-6 py-4">Giá</th>
                            <th class="px-6 py-4 min-w-[150px]">Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($listings as $listing)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-bold">{{ $listing->id }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $cover = $listing->images->where('is_cover', true)->first();
                                    @endphp
                                    @if ($cover)
                                        <img src="{{ $cover->url }}" alt="cover"
                                            class="h-20 object-cover rounded-lg border">
                                    @endif
                                </td>
                                <td class="px-6 py-4">{{ $listing->title }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $price = $listing->price_total;
                                        $currency = $listing->currency;
                                        $displayPrice = '';
                                        if ($currency === 'VND') {
                                            $displayPrice =
                                                '<span class="js-vnd-words" data-price="' . $price . '"></span>';
                                        } else {
                                            $displayPrice = number_format($price) . ' ' . $currency;
                                        }
                                    @endphp
                                    {!! $displayPrice !!}
                                    @if ($currency === 'VND')
                                        <script>
                                            function numberToWordsVND(number) {
                                                let n = parseInt(number, 10);
                                                if (isNaN(n) || n === 0) return "";
                                                let str = "";
                                                if (n >= 1000000000) {
                                                    str += Math.floor(n / 1000000000) + " tỷ ";
                                                    n = n % 1000000000;
                                                }
                                                if (n >= 1000000) {
                                                    str += Math.floor(n / 1000000) + " triệu ";
                                                    n = n % 1000000;
                                                }
                                                if (n >= 1000) {
                                                    str += Math.floor(n / 1000) + " nghìn ";
                                                    n = n % 1000;
                                                }
                                                if (n > 0) {
                                                    str += n + " đồng";
                                                }
                                                return str.trim();
                                            }
                                            document.addEventListener('DOMContentLoaded', function() {
                                                document.querySelectorAll('.js-vnd-words').forEach(function(el) {
                                                    const price = el.getAttribute('data-price');
                                                    el.textContent = numberToWordsVND(price);
                                                });
                                            });
                                        </script>
                                    @endif
                                </td>
                                <td class="px-6 py-4 ">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('listings.edit', $listing) }}"
                                            class="rounded-xl bg-yellow-400 text-white px-4 py-2 font-semibold hover:bg-yellow-500 transition text-xs md:text-md">Sửa</a>
                                        <form class="hidden" action="{{ route('listings.destroy', $listing) }}"
                                            method="POST" x-ref="deleteForm{{ $listing->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                onclick="openPopup(); window.deleteForm = this.closest('form');"
                                                class="rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition text-xs md:text-md">
                                                Xóa
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $listings->links() }}
            </div>
        </div>
        <div x-ref="cardView" class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($listings as $listing)
                    <div class="bg-white rounded-3xl shadow-panel p-4 flex flex-col">
                        @php
                            $cover = $listing->images->where('is_cover', true)->first();
                        @endphp
                        @if ($cover)
                            <img src="{{ $cover->url }}" alt="cover"
                                class="h-40 w-full object-cover rounded-lg border mb-4">
                        @endif
                        <div class="flex-1">
                            <h3 class="font-bold text-md mb-2">{{ $listing->title }}</h3>
                            <div class="mb-2 text-md font-semibold text-red-600">
                                @php
                                    $price = $listing->price_total;
                                    $currency = $listing->currency;
                                    $displayPrice = '';
                                    if ($currency === 'VND') {
                                        $displayPrice =
                                            '<span class="js-vnd-words" data-price="' . $price . '"></span>';
                                    } else {
                                        $displayPrice = number_format($price) . ' ' . $currency;
                                    }
                                @endphp
                                {!! $displayPrice !!}
                                @if ($currency === 'VND')
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            document.querySelectorAll('.js-vnd-words').forEach(function(el) {
                                                const price = el.getAttribute('data-price');
                                                el.textContent = numberToWordsVND(price);
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <a href="{{ route('listings.edit', $listing) }}"
                                class="rounded-xl bg-yellow-400 text-white px-4 py-2 font-semibold hover:bg-yellow-500 transition text-xs md:text-md">Sửa</a>
                            <form action="{{ route('listings.destroy', $listing) }}" method="POST"
                                x-ref="deleteForm{{ $listing->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="openPopup(); window.deleteForm = this.closest('form');"
                                    class="hidden rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition text-xs md:text-md">
                                    Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $listings->links() }}
            </div>
        </div>
        <div class="mt-4">
            {{ $listings->links() }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var tableBtn = document.getElementById('tableViewBtn');
                var cardBtn = document.getElementById('cardViewBtn');
                var tableView = document.querySelector('[x-ref="tableView"]');
                var cardView = document.querySelector('[x-ref="cardView"]');
                if (tableBtn && cardBtn && tableView && cardView) {
                    tableBtn.addEventListener('click', function() {
                        tableView.classList.remove('hidden');
                        cardView.classList.add('hidden');
                    });
                    cardBtn.addEventListener('click', function() {
                        cardView.classList.remove('hidden');
                        tableView.classList.add('hidden');
                    });
                }
            });
        </script>
    </div>
    <script>
        window.addEventListener('popup-accepted', function() {
            if (window.deleteForm) {
                window.deleteForm.submit();
                window.deleteForm = null;
            }
        });
    </script>
    <x-popup>
        Bạn chắc chắn muốn xóa bài đăng này?
    </x-popup>
@endsection
