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
                            <th class="px-6 py-4">Ảnh đại diện</th>
                            <th class="px-6 py-4">Tiêu đề</th>
                            <th class="px-6 py-4">Giá</th>
                            <th class="px-6 py-4">Hành động</th>
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
                                        <form action="{{ route('listings.destroy', $listing) }}" method="POST"
                                            x-ref="deleteForm{{ $listing->id }}">
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
                                    class="rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition text-xs md:text-md">
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
