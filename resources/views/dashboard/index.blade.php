@extends('dashboard.layout')

@section('title', 'Dashboard')
@section('heading', 'Chào mừng đến với Bất Động Sản Phát Đạt.')

@section('content')
<div class="space-y-6">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Posts -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-xl shadow-lg p-6 border border-blue-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-semibold text-blue-700">Tổng bài viết</p>
                    <p class="text-3xl font-bold text-blue-900">{{ $stats['total_posts'] }}</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm">
                    <span class="text-green-600 font-semibold">{{ $stats['published_posts'] }}</span>
                    <span class="ml-1 text-gray-600">đã xuất bản</span>
                    <span class="mx-2 text-gray-400">•</span>
                    <span class="text-amber-600 font-semibold">{{ $stats['draft_posts'] }}</span>
                    <span class="ml-1 text-gray-600">nháp</span>
                </div>
            </div>
        </div>

        <!-- Total Listings -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-xl shadow-lg p-6 border border-green-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-semibold text-green-700">Tổng bài đăng BDS</p>
                    <p class="text-3xl font-bold text-green-900">{{ $stats['total_listings'] }}</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm">
                    <span class="text-emerald-600 font-semibold">{{ $stats['published_listings'] }}</span>
                    <span class="ml-1 text-gray-600">đang hiển thị</span>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="bg-gradient-to-br from-purple-50 to-violet-100 rounded-xl shadow-lg p-6 border border-purple-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-violet-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-semibold text-purple-700">Tổng người dùng</p>
                    <p class="text-3xl font-bold text-purple-900">{{ $stats['total_users'] }}</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-gradient-to-br from-gray-50 to-slate-100 rounded-xl shadow-lg p-6 border border-gray-200 hover:shadow-xl transition-all duration-300">
            <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center">
                <svg class="w-4 h-4 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Thao tác nhanh
            </h3>
            <div class="space-y-2">
                <a href="{{ route('listings.create') }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-semibold rounded-lg text-white bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-200 shadow-md hover:shadow-lg">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Thêm bài đăng
                </a>
                <a href="{{ route('posts.create') }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-semibold rounded-lg text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-200 shadow-md hover:shadow-lg">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Thêm bài viết
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Posts -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Bài viết mới nhất</h3>
                    <a href="{{ route('posts.index') }}" class="text-sm text-blue-600 hover:text-blue-800">Xem tất cả</a>
                </div>
            </div>
            <div class="p-6">
                @if($recentPosts->count() > 0)
                    <div class="space-y-4">
                        @foreach($recentPosts as $post)
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        <a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600">{{ $post->title }}</a>
                                    </p>
                                    <div class="flex items-center mt-1 text-xs text-gray-500">
                                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                                        <span class="mx-1">•</span>
                                        <span class="px-2 py-1 rounded-full text-xs
                                            @if($post->status === 'published') bg-green-100 text-green-800
                                            @elseif($post->status === 'draft') bg-gray-100 text-gray-800
                                            @else bg-yellow-100 text-yellow-800
                                            @endif">
                                            {{ ucfirst($post->status) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Chưa có bài viết</h3>
                        <p class="mt-1 text-sm text-gray-500">Bắt đầu bằng cách tạo bài viết đầu tiên.</p>
                        <div class="mt-6">
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center px-6 py-3 border border-transparent shadow-lg text-sm font-semibold rounded-lg text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Tạo bài viết mới
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Recent Listings -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Bài đăng BDS mới nhất</h3>
                    <a href="{{ route('listings.index') }}" class="text-sm text-green-600 hover:text-green-800">Xem tất cả</a>
                </div>
            </div>
            <div class="p-6">
                @if($recentListings->count() > 0)
                    <div class="space-y-4">
                        @foreach($recentListings as $listing)
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    @if($listing->images->first())
                                        <img src="{{ $listing->images->first()->url }}" alt="Hình ảnh BDS" class="w-10 h-10 rounded-lg object-cover">
                                    @else
                                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        <a href="{{ route('listings.show', $listing) }}" class="hover:text-green-600">{{ $listing->title }}</a>
                                    </p>
                                    <div class="flex items-center justify-between mt-1">
                                        <div class="text-xs text-gray-500">
                                            <span>{{ $listing->created_at->format('d/m/Y') }}</span>
                                        </div>
                                        <div class="text-xs font-medium text-green-600">
                                            {{ formatShortPrice($listing->price_total, $listing->currency) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Chưa có bài đăng BDS</h3>
                        <p class="mt-1 text-sm text-gray-500">Bắt đầu bằng cách tạo bài đăng đầu tiên.</p>
                        <div class="mt-6">
                            <a href="{{ route('listings.create') }}" class="inline-flex items-center px-6 py-3 border border-transparent shadow-lg text-sm font-semibold rounded-lg text-white bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Tạo bài đăng mới
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Featured Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Published Posts -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Bài viết được xuất bản gần đây</h3>
            </div>
            <div class="p-6">
                @if($recentPublishedPosts->count() > 0)
                    <div class="space-y-4">
                        @foreach($recentPublishedPosts as $post)
                            <div class="border-l-4 border-blue-400 pl-4">
                                <h4 class="text-sm font-medium text-gray-900">
                                    <a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600">{{ $post->title }}</a>
                                </h4>
                                @if($post->summary)
                                    <p class="text-xs text-gray-600 mt-1">{{ Str::limit($post->summary, 100) }}</p>
                                @endif
                                <div class="flex items-center mt-2 text-xs text-gray-500">
                                    <span>{{ $post->published_at ? $post->published_at->format('d/m/Y H:i') : 'Chưa xuất bản' }}</span>
                                    @if($post->reading_minutes)
                                        <span class="mx-1">•</span>
                                        <span>{{ $post->reading_minutes }} phút đọc</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-gray-500 text-center py-4">Chưa có bài viết được xuất bản.</p>
                @endif
            </div>
        </div>

        <!-- High Value Listings -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Bài đăng BDS giá trị cao</h3>
            </div>
            <div class="p-6">
                @if($highValueListings->count() > 0)
                    <div class="space-y-4">
                        @foreach($highValueListings as $listing)
                            <div class="border-l-4 border-green-400 pl-4">
                                <h4 class="text-sm font-medium text-gray-900">
                                    <a href="{{ route('listings.show', $listing) }}" class="hover:text-green-600">{{ $listing->title }}</a>
                                </h4>
                                <div class="flex items-center justify-between mt-2">
                                    <div class="text-xs text-gray-500">
                                        @if($listing->area_land)
                                            <span>{{ number_format($listing->area_land) }}m²</span>
                                            <span class="mx-1">•</span>
                                        @endif
                                        <span>{{ $listing->address }}</span>
                                    </div>
                                    <div class="text-sm font-semibold text-green-600">
                                        {{ formatVietnamesePrice($listing->price_total, $listing->currency) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-gray-500 text-center py-4">Chưa có bài đăng BDS.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
