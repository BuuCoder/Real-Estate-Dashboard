@extends('dashboard.layout')

@section('title', 'Danh sách Bài viết')

@section('content')
<div class="container mx-auto py-8" x-data="{ deleteForm: null }">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl md:text-2xl font-extrabold">Danh sách Bài viết</h2>
        <a href="{{ route('posts.create') }}" class="rounded-xl bg-brand-600 text-white border border-brand-600 px-4 py-2 font-semibold hover:bg-brand-700 transition text-xs md:text-md">Tạo mới</a>
    </div>
    @if(session('success'))
        <div class="mb-4 flex items-center rounded-lg bg-green-100 px-4 py-3 text-green-700 text-xs md:text-md font-semibold border border-green-300">
            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
            </svg>
            {{ session('success') }}
        </div>
    @endif
    <form method="GET" class="mb-4 flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Tìm kiếm..." class="border rounded-xl px-3 py-2 w-1/3">
        <button class="rounded-xl bg-gray-600 text-white px-4 py-2 font-semibold hover:bg-gray-700 transition text-xs md:text-md flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
            <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Tìm
        </button>
    </form>
    <div class="bg-white rounded-3xl shadow-panel overflow-x-auto">
        <table class="min-w-full text-xs md:text-sm">
            <thead>
                <tr class="text-left text-gray-500 font-semibold border-b">
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Tiêu đề</th>
                    <th class="px-6 py-4">Thumbnail</th>
                    <th class="px-6 py-4">Trạng thái</th>
                    <th class="px-6 py-4">Ngày đăng</th>
                    <th class="px-6 py-4">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($posts as $post)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-bold">{{ $post->id }}</td>
                    <td class="px-6 py-4">{{ $post->title }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ $post->cover_image_url }}" alt="{{ $post->title }}" class="w-20 object-cover rounded">
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $statusLabels = [
                                'draft' => 'Nháp',
                                'published' => 'Đã xuất bản',
                                'pending' => 'Chờ duyệt',
                                'archived' => 'Lưu trữ',
                                'rejected' => 'Từ chối',
                            ];
                            $statusColors = [
                                'published' => 'bg-blue-100 text-blue-700',
                                'draft' => 'bg-yellow-100 text-yellow-700',
                                'pending' => 'bg-orange-100 text-orange-700',
                                'archived' => 'bg-gray-200 text-gray-700',
                                'rejected' => 'bg-red-100 text-red-700',
                            ];
                            $status = $post->status;
                        @endphp
                        <span class="inline-block rounded-full px-3 py-1 text-xxs md:text-xs font-semibold {{ $statusColors[$status] ?? 'bg-gray-100 text-gray-700' }}">
                            {{ $statusLabels[$status] ?? ucfirst($status) }}
                        </span>
                    </td>
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $post->published_at ? $post->published_at->format('d/m/Y') : '' }}</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2 h-full items-center">
                            <a href="{{ route('posts.edit', $post) }}" class="rounded-xl bg-yellow-400 text-white px-4 py-2 font-semibold hover:bg-yellow-500 transition text-xs md:text-md h-full flex items-center justify-center">Sửa</a>
                            <form class="hidden" action="{{ route('posts.destroy', $post) }}" method="POST" x-ref="deleteForm{{ $post->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button"
                                    onclick="openPopup(); window.deleteForm = this.closest('form');"
                                    class="rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition text-xs md:text-md h-full flex items-center justify-center">
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
    <div class="mt-4">{{ $posts->links() }}</div>
</div>
<script>
    window.addEventListener('popup-accepted', function() {
        if(window.deleteForm) {
            window.deleteForm.submit();
            window.deleteForm = null;
        }
    });
</script>
<x-popup>
    Bạn chắc chắn muốn xóa bài viết này?
</x-popup>
@endsection