@extends('dashboard.layout')

@section('title', $post->title)
@section('heading', 'Chi tiết bài viết')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Quay lại danh sách
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex justify-between items-start">
                <div class="flex-1">
                    <h1 class="text-3xl font-bold text-gray-900 mb-3">{{ $post->title }}</h1>
                    
                    @if($post->summary)
                        <p class="text-lg text-gray-600 mb-4">{{ $post->summary }}</p>
                    @endif
                    
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <span>Tác giả: {{ $post->author->name ?? 'Không xác định' }}</span>
                        <span>•</span>
                        <span>{{ $post->published_at ? $post->published_at->format('d/m/Y H:i') : $post->created_at->format('d/m/Y H:i') }}</span>
                        @if($post->reading_minutes)
                            <span>•</span>
                            <span>{{ $post->reading_minutes }} phút đọc</span>
                        @endif
                        <span>•</span>
                        <span class="px-2 py-1 rounded-full text-xs
                            @if($post->status === 'published') bg-green-100 text-green-800
                            @elseif($post->status === 'draft') bg-gray-100 text-gray-800
                            @elseif($post->status === 'pending') bg-yellow-100 text-yellow-800
                            @elseif($post->status === 'archived') bg-blue-100 text-blue-800
                            @else bg-red-100 text-red-800
                            @endif">
                            {{ $statuses[$post->status] ?? ucfirst($post->status) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cover Image -->
        @if($post->cover_image_url)
            <div class="px-6 py-4">
                <img src="{{ $post->cover_image_url }}" alt="Ảnh bìa bài viết" 
                     class="w-full h-64 md:h-96 object-cover rounded-lg">
            </div>
        @endif

        <!-- Categories and Tags -->
        @if($post->postTypes->count() > 0 || $post->tags->count() > 0)
            <div class="px-6 py-4 border-b border-gray-200">
                @if($post->postTypes->count() > 0)
                    <div class="mb-3">
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Danh mục:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($post->postTypes as $postType)
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                    {{ $postType->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                @if($post->tags->count() > 0)
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Thẻ:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($post->tags as $tag)
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">
                                    #{{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <!-- Content -->
        <div class="px-6 py-6">
            <div class="prose max-w-none">
                @if($post->content_fmt)
                    {!! $post->content_fmt !!}
                @else
                    {!! nl2br(e($post->content)) !!}
                @endif
            </div>
        </div>

        <!-- SEO Information -->
        @if($post->meta_title || $post->meta_description || $post->meta_keywords)
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold mb-3">Thông tin SEO</h3>
                <div class="space-y-3">
                    @if($post->meta_title)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Meta Title:</label>
                            <p class="text-sm text-gray-600">{{ $post->meta_title }}</p>
                        </div>
                    @endif
                    
                    @if($post->meta_description)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Meta Description:</label>
                            <p class="text-sm text-gray-600">{{ $post->meta_description }}</p>
                        </div>
                    @endif
                    
                    @if($post->meta_keywords)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Meta Keywords:</label>
                            <p class="text-sm text-gray-600">{{ $post->meta_keywords }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Additional Information -->
        @if($post->canonical_url || $post->locale || $post->slug)
            <div class="px-6 py-4 border-t border-gray-200">
                <h3 class="text-lg font-semibold mb-3">Thông tin bổ sung</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @if($post->slug)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Slug:</label>
                            <p class="text-sm text-gray-600">{{ $post->slug }}</p>
                        </div>
                    @endif
                    
                    @if($post->locale)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Ngôn ngữ:</label>
                            <p class="text-sm text-gray-600">{{ $post->locale }}</p>
                        </div>
                    @endif
                    
                    @if($post->canonical_url)
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Canonical URL:</label>
                            <p class="text-sm text-gray-600 break-all">{{ $post->canonical_url }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Actions -->
        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
            <div class="flex justify-between items-center">
                <div class="flex space-x-3">
                    <a href="{{ route('posts.edit', $post) }}" 
                       class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Chỉnh sửa
                    </a>
                    
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline"
                          onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Xóa
                        </button>
                    </form>
                </div>
                
                <div class="text-sm text-gray-500">
                    Cập nhật lần cuối: {{ $post->updated_at->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection