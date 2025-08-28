@extends('dashboard.layout')

@section('title', 'Chỉnh sửa Thẻ')

@section('content')
<div class="flex justify-center py-2">
    <form action="{{ route('tags.update', $tag) }}" method="POST" class="space-y-6 w-full max-w-xl bg-white rounded-3xl shadow-panel p-8">
        @csrf
        @method('PUT')
        <h2 class="text-xl md:text-2xl font-extrabold mb-2">Chỉnh sửa Thẻ</h2>
        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-100 px-4 py-3 text-red-700 text-xs md:text-md font-semibold border border-red-300">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="code" class="block text-sm font-medium mb-1">Code</label>
            <input type="text" name="code" class="text-sm w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" value="{{ old('code', $tag->code) }}" required>
            @error('code')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input type="text" name="name" class="text-sm w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" value="{{ old('name', $tag->name) }}" required>
            @error('name')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="flex items-center gap-3 pt-2">
            <button type="submit" class="text-sm rounded-xl bg-brand-600 text-white px-5 py-2.5 font-semibold hover:bg-brand-700">Cập nhật</button>
            <a href="{{ route('tags.index') }}" class="text-gray-600 hover:text-slate-900">Quay lại</a>
        </div>
    </form>
</div>
@endsection