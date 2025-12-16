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

                    <!-- Share Button -->
                    <button type="button" id="shareBtn"
                            class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                        Share Facebook/Zalo
                    </button>
                    
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

        <!-- Share Modal -->
        <div id="shareModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
            <div class="bg-white rounded-xl shadow-2xl max-w-3xl w-full max-h-[90vh] overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <h3 class="text-xl font-bold text-gray-900">Share lên Facebook/Zalo</h3>
                    <button onclick="closeShareModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                
                <div class="p-6 overflow-y-auto max-h-[calc(90vh-140px)]">
                    <!-- Loading -->
                    <div id="shareLoading" class="text-center py-8">
                        <svg class="animate-spin h-8 w-8 text-blue-600 mx-auto" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <p class="mt-2 text-gray-600">Đang tải...</p>
                    </div>

                    <!-- Content -->
                    <div id="shareContent" class="hidden space-y-6">
                        <!-- Share Text -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label class="block text-sm font-medium text-gray-700">Nội dung để copy:</label>
                                <button onclick="copyShareText()" class="inline-flex items-center px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white text-sm rounded-lg">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/>
                                    </svg>
                                    Copy Text
                                </button>
                            </div>
                            <textarea id="shareText" readonly rows="10" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-50 text-sm font-mono"></textarea>
                        </div>

                        <!-- Images -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label class="block text-sm font-medium text-gray-700">Hình ảnh (<span id="imageCount">0</span> ảnh) - Click vào ảnh để copy:</label>
                            </div>
                            <div id="imageGrid" class="grid grid-cols-2 md:grid-cols-3 gap-3"></div>
                            <p id="copyStatus" class="mt-2 text-sm text-green-600 hidden">✓ Đã copy ảnh vào clipboard!</p>
                        </div>
                    </div>
                </div>

                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    <p class="text-sm text-gray-600">
                        💡 Copy nội dung, click vào ảnh để copy, sau đó paste vào Facebook/Zalo để đăng bài.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
let shareData = null;

document.getElementById('shareBtn').addEventListener('click', function() {
    document.getElementById('shareModal').classList.remove('hidden');
    document.getElementById('shareLoading').classList.remove('hidden');
    document.getElementById('shareContent').classList.add('hidden');
    
    fetch('{{ route("posts.share", $post) }}')
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                shareData = data.data;
                renderShareContent();
            } else {
                alert('Lỗi: ' + data.message);
                closeShareModal();
            }
        })
        .catch(err => {
            alert('Đã xảy ra lỗi khi tải dữ liệu');
            closeShareModal();
        });
});

function renderShareContent() {
    document.getElementById('shareLoading').classList.add('hidden');
    document.getElementById('shareContent').classList.remove('hidden');
    
    document.getElementById('shareText').value = shareData.share_text;
    document.getElementById('imageCount').textContent = shareData.images.length;
    
    const grid = document.getElementById('imageGrid');
    grid.innerHTML = '';
    
    shareData.images.forEach((img, index) => {
        const div = document.createElement('div');
        div.className = 'relative group cursor-pointer';
        div.onclick = () => copyImage(img.url, index);
        div.innerHTML = `
            <img src="${img.url}" alt="${img.caption}" class="w-full h-32 object-cover rounded-lg border-2 border-gray-200 hover:border-blue-500 transition-colors">
            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                <span class="opacity-0 group-hover:opacity-100 px-3 py-1 bg-white text-gray-800 text-sm rounded-lg shadow">
                    📋 Copy ảnh
                </span>
            </div>
            <p class="mt-1 text-xs text-gray-600 truncate">${img.caption}</p>
        `;
        grid.appendChild(div);
    });
}

function closeShareModal() {
    document.getElementById('shareModal').classList.add('hidden');
}

function copyShareText() {
    const textarea = document.getElementById('shareText');
    textarea.select();
    document.execCommand('copy');
    
    const btn = event.target.closest('button');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Đã copy!';
    btn.classList.remove('bg-blue-600', 'hover:bg-blue-700');
    btn.classList.add('bg-green-600');
    
    setTimeout(() => {
        btn.innerHTML = originalText;
        btn.classList.remove('bg-green-600');
        btn.classList.add('bg-blue-600', 'hover:bg-blue-700');
    }, 2000);
}

async function copyImage(url, index) {
    try {
        const response = await fetch(url);
        const blob = await response.blob();
        
        await navigator.clipboard.write([
            new ClipboardItem({ [blob.type]: blob })
        ]);
        
        showCopyStatus();
    } catch (err) {
        // Fallback: mở ảnh trong tab mới để user copy thủ công
        window.open(url, '_blank');
        alert('Không thể copy tự động. Ảnh đã mở trong tab mới, hãy click chuột phải > Copy image.');
    }
}

function showCopyStatus() {
    const status = document.getElementById('copyStatus');
    status.classList.remove('hidden');
    setTimeout(() => status.classList.add('hidden'), 2000);
}

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeShareModal();
});

// Close modal on backdrop click
document.getElementById('shareModal').addEventListener('click', function(e) {
    if (e.target === this) closeShareModal();
});
</script>
@endsection