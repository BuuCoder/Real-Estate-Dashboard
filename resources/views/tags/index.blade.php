@extends('dashboard.layout')

@section('title', 'Danh sách Thẻ')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl md:text-2xl font-extrabold">Danh sách Thẻ</h2>
    </div>
    <form action="{{ route('tags.index') }}" method="GET" class="mb-4 flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" class="text-sm border rounded-xl px-3 py-2 w-1/4" placeholder="Tìm kiếm thẻ...">
        <button type="submit" class="rounded-xl bg-gray-600 text-white px-4 py-2 font-semibold hover:bg-gray-700 transition text-xs md:text-md flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
            <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Tìm
        </button>
    </form>
    <div class="mb-4">
        <button type="button" id="showAddTagForm" class="rounded-xl bg-brand-100 text-brand-700 border border-brand-200 px-4 py-2 font-semibold hover:bg-brand-200 transition text-xs md:text-md">
            Thêm thẻ
        </button>
    </div>
    @if ($errors->any())
        <div class="mb-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <form id="addTagForm" action="{{ route('tags.store') }}" method="POST" class="mb-4 flex flex-col md:flex-row gap-2 hidden">
        @csrf
        <input type="text" name="name" id="tagNameInput" class="text-sm border rounded-xl px-3 py-2 w-full md:w-2/4" placeholder="Tên thẻ" required>
        <input type="text" name="code" id="tagSlugInput" class="text-sm border rounded-xl px-3 py-2 w-full md:w-1/4" placeholder="slug" required>
        <script>
            function slugify(str) {
                return str
                    .toLowerCase()
                    .normalize('NFD').replace(/[\u0300-\u036f]/g, '') // Remove accents
                    .replace(/[^a-z0-9\s-]/g, '') // Remove invalid chars
                    .replace(/\s+/g, '-') // Replace spaces with -
                    .replace(/-+/g, '-') // Collapse dashes
                    .replace(/^-+|-+$/g, ''); // Trim dashes
            }
            document.getElementById('tagNameInput').addEventListener('input', function() {
                document.getElementById('tagSlugInput').value = slugify(this.value);
            });
        </script>
        <button type="submit" class="rounded-xl bg-brand-600 text-white border border-brand-600 px-4 py-2 font-semibold hover:bg-brand-700 transition text-xs md:text-md w-full md:w-auto">Thêm thẻ</button>
    </form>
    <script>
        const showBtn = document.getElementById('showAddTagForm');
        const form = document.getElementById('addTagForm');
        showBtn.addEventListener('click', function() {
            form.classList.toggle('hidden');
            if (!form.classList.contains('hidden')) {
                showBtn.textContent = 'Ẩn';
            } else {
                showBtn.textContent = 'Thêm thẻ';
            }
        });
    </script>
    <div class="bg-white rounded-3xl shadow-panel overflow-x-auto">
        <table class="min-w-full text-xs md:text-sm">
            <thead>
                <tr class="text-left text-gray-500 font-semibold border-b">
                    <th class="px-5 py-4">ID</th>
                    <th class="px-5 py-4">Name</th>
                    <th class="px-5 py-4">Slug</th>
                    <th class="px-5 py-4">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($tags as $tag)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-4 font-bold">{{ $tag->id }}</td>
                    <td class="px-5 py-4">{{ $tag->name }}</td>
                    <td class="px-5 py-4">{{ $tag->code }}</td>
                    <td class="px-5 py-4">
                        <div class="flex gap-2 h-full items-center justify-start">
                            <a href="{{ route('tags.edit', $tag) }}" class="rounded-xl bg-yellow-400 text-white px-4 py-2 font-semibold hover:bg-yellow-500 transition text-xs md:text-md h-full flex items-center justify-center">Sửa</a>
                            <form action="{{ route('tags.destroy', $tag) }}" method="POST" class="hidden inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition text-xs md:text-md h-full flex items-center justify-center" onclick="return confirm('Delete this tag?')">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $tags->onEachSide(1)->appends(request()->except('page'))->links('components.pagination') }}
    </div>
</div>
@endsection