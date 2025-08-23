@extends('dashboard.layout')
@section('title', 'Thêm User')
@section('heading', 'Thêm User mới')
@section('content')
    <form class="space-y-6 max-w-2xl" method="POST" action="{{ route('users.store') }}">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Tên</label>
            <input name="name" value="{{ old('name') }}"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                placeholder="Nhập tên" required>
            @error('name')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <input name="email" type="email" value="{{ old('email') }}"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                placeholder="Nhập email" required>
            @error('email')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Mật khẩu</label>
            <input name="password" type="password"
                class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                placeholder="Nhập mật khẩu" required>
            @error('password')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Quyền</label>
            <select name="role_id" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" required>
                <option value="">-- Chọn quyền --</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
            @error('role_id')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="flex items-center gap-3">
            <button class="rounded-xl bg-brand-600 text-white px-5 py-2.5 font-semibold hover:bg-brand-700">Tạo</button>
            <a href="{{ route('users.index') }}" class="text-gray-600 hover:text-slate-900">Hủy</a>
        </div>
    </form>
@endsection
