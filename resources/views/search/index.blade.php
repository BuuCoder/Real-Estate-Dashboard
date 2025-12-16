@extends('dashboard.layout')

@section('title', 'Tìm kiếm')
@section('heading', 'Kết quả tìm kiếm')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Search Form -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <form method="GET" action="{{ route('search') }}" class="space-y-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <input 
                        type="text" 
                        name="q" 
                        value="{{ $query }}" 
                        placeholder="Nhập từ khóa tìm kiếm..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                </div>
                
                <div class="w-full md:w-48">
                    <select name="category" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Tất cả danh mục</option>
                        @foreach($postTypes as $postType)
                            <option value="{{ $postType->id }}" {{ $category == $postType->id ? 'selected' : '' }}>
                                {{ $postType->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="w-full md:w-48">
                    <select name="type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="all" {{ $type == 'all' ? 'selected' : '' }}>Tất cả</option>
                        <option value="posts" {{ $type == 'posts' ? 'selected' : '' }}>Bài viết</option>
                        <option value="listings" {{ $type == 'listings' ? 'selected' : '' }}>Bài đăng</option>
                    </select>
                </div>
                
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Tìm kiếm
                </button>
            </div>
        </form>
    </div>

    @if($query)
        <!-- Search Results Summary -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800">
                Kết quả cho "{{ $query }}" 
                <span class="text-gray-500 text-base font-normal">
                    ({{ $posts->count() + $listings->count() }} kết quả)
                </span>
            </h2>
        </div>

        <!-- Posts Results -->
        @if($posts->count() > 0 && (!$type || $type === 'all' || $type === 'posts'))
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Bài viết ({{ $posts->count() }})
                </h3>
                
                <div class="grid gap-4">
                    @foreach($posts as $post)
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                            <div class="flex justify-between items-start mb-3">
                                <h4 class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                </h4>
                                <div class="flex flex-wrap gap-1">
                                    @foreach($post->postTypes as $postType)
                                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">
                                            {{ $postType->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            
                            @if($post->summary)
                                <p class="text-gray-600 mb-3">{{ Str::limit($post->summary, 200) }}</p>
                            @endif
                            
                            <div class="flex justify-between items-center text-sm text-gray-500">
                                <span>Tác giả: {{ $post->author->name ?? 'Không xác định' }}</span>
                                <span>{{ $post->published_at ? $post->published_at->format('d/m/Y') : $post->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Listings Results -->
        @if($listings->count() > 0 && (!$type || $type === 'all' || $type === 'listings'))
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Bài đăng bất động sản ({{ $listings->count() }})
                </h3>
                
                <div class="grid gap-4">
                    @foreach($listings as $listing)
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                            <div class="flex justify-between items-start mb-3">
                                <h4 class="text-lg font-semibold text-gray-800 hover:text-green-600">
                                    <a href="{{ route('listings.show', $listing) }}">{{ $listing->title }}</a>
                                </h4>
                                <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full font-medium">
                                    {{ number_format($listing->price_total) }} {{ $listing->currency }}
                                </span>
                            </div>
                            
                            @if($listing->description)
                                <p class="text-gray-600 mb-3">{{ Str::limit(strip_tags($listing->description), 200) }}</p>
                            @endif
                            
                            <div class="flex justify-between items-center text-sm text-gray-500">
                                <span>Địa chỉ: {{ $listing->address }}</span>
                                <span>Diện tích: {{ $listing->area_land }}m²</span>
                            </div>
                            
                            <div class="flex justify-between items-center text-sm text-gray-500 mt-2">
                                <span>Đăng bởi: {{ $listing->user->name ?? 'Không xác định' }}</span>
                                <span>{{ $listing->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if($posts->count() === 0 && $listings->count() === 0)
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">Không tìm thấy kết quả</h3>
                <p class="mt-1 text-sm text-gray-500">Thử tìm kiếm với từ khóa khác hoặc thay đổi bộ lọc.</p>
            </div>
        @endif
    @else
        <div class="text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">Tìm kiếm nội dung</h3>
            <p class="mt-1 text-sm text-gray-500">Nhập từ khóa để tìm kiếm bài viết và bài đăng bất động sản.</p>
        </div>
    @endif
</div>
@endsection