@extends('dashboard.layout')

@section('title', 'Danh sách User')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-extrabold">Danh sách User</h2>
        <a href="{{ route('users.create') }}" class="rounded-xl bg-brand-600 text-white border border-brand-600 px-4 py-2 font-semibold hover:bg-brand-700 transition">Thêm User</a>
    </div>
    @if(session('success'))
        <div class="mb-4 text-green-600 font-semibold">{{ session('success') }}</div>
    @endif
    <div class="bg-white rounded-3xl shadow-panel overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead>
                <tr class="text-left text-gray-500 font-semibold border-b">
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Tên</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Quyền</th>
                    <th class="px-6 py-4">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($users as $user)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-bold">{{ $user->id }}</td>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        <span class="inline-block rounded-full px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-700">{{ $user->role->name ?? '' }}</span>
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="rounded-xl bg-yellow-400 text-white px-4 py-2 font-semibold hover:bg-yellow-500 transition">Sửa</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xóa?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
