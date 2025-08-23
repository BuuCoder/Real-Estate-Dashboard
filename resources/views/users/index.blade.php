@extends('dashboard.layout')

@section('title', 'Danh sách User')

@section('content')
<div class="container mx-auto py-8" x-data="{ deleteForm: null }">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl md:text-2xl font-extrabold">Danh sách Người dùng</h2>
        <a href="{{ route('users.create') }}" class="rounded-xl bg-brand-600 text-white border border-brand-600 px-4 py-2 font-semibold hover:bg-brand-700 transition text-xs md:text-md">Thêm Người dùng</a>
    </div>
    @if(session('success'))
        <div class="mb-4 flex items-center rounded-lg bg-green-100 px-4 py-3 text-green-700 text-xs md:text-md font-semibold border border-green-300">
            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
            </svg>
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white rounded-3xl shadow-panel overflow-x-auto">
        <table class="min-w-full text-xs md:text-sm">
            <thead>
                <tr class="text-left text-gray-500 font-semibold border-b">
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Tên</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4 min-w-[200px]">Quyền</th>
                    <th class="px-6 py-4">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($users as $user)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-bold">{{ $user->id }}</td>
                    <td class="px-6 py-4">{{ $user->full_name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        <span class="inline-block rounded-full px-3 py-1 text-xxs md:text-xs font-semibold
                            @if($user->role_id == 1)
                                bg-red-100 text-red-700
                            @elseif($user->role_id == 2)
                                bg-yellow-100 text-yellow-700
                            @elseif($user->role_id == 3)
                                bg-blue-100 text-blue-700
                            @else
                                bg-gray-100 text-gray-700
                            @endif
                        ">
                            {{ $user->role->name ?? '' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="rounded-xl bg-yellow-400 text-white px-4 py-2 font-semibold hover:bg-yellow-500 transition text-xs md:text-md">Sửa</a>
                        <form class="hidden" action="{{ route('users.destroy', $user->id) }}" method="POST" x-ref="deleteForm{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                onclick="openPopup(); window.deleteForm = this.closest('form');"
                                class="rounded-xl bg-red-500 text-white px-4 py-2 font-semibold hover:bg-red-600 transition text-xs md:text-md">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
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
    Bạn chắc chắn muốn xóa người dùng này?
</x-popup>
@endsection
