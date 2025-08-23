@extends('dashboard.layout')

@section('title', 'Dashboard')
@section('heading', 'Welcome to Planti.')

@section('content')
    <!-- Top Cards -->
    <div class="grid sm:grid-cols-2 gap-4 md:gap-6 mb-6">
        <a href="{{ url('/tasks/create') }}" class="rounded-3xl p-6 text-white shadow-soft transition hover:-translate-y-0.5"
            style="background: linear-gradient(135deg,#ffcf6f,#ff7a59);">
            <div class="flex items-start justify-between">
                <div>
                    <h3 class="text-lg font-bold mb-2">R&D for New Banking Mobile App</h3>
                    <p class="text-white/80 text-sm">Active sprint • 4 members</p>
                </div>
                <svg class="w-12 h-12 opacity-70" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="10" stroke-width="1.5" />
                    <path d="M12 6v6l4 2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </a>

        <a href="{{ url('/tasks/create') }}"
            class="rounded-3xl p-6 text-white shadow-soft relative overflow-hidden transition hover:-translate-y-0.5"
            style="background: linear-gradient(135deg,#7e36f4,#5f1fb0);">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold">Create Signup Page</h3>
                <div class="relative w-20 h-20">
                    <svg viewBox="0 0 36 36" class="w-20 h-20">
                        <path d="M18 2a16 16 0 110 32 16 16 0 010-32Z" fill="rgba(255,255,255,0.15)" />
                        <path stroke="white" stroke-width="3" fill="none" stroke-linecap="round"
                            d="M18 3 a15 15 0 1 1 0 30 a15 15 0 1 1 0 -30" />
                        <path stroke="#ffb86c" stroke-width="3" fill="none" stroke-linecap="round"
                            d="M18 3 a15 15 0 0 1 12 24" />
                    </svg>
                    <div class="absolute inset-0 grid place-items-center text-xl font-extrabold">47%</div>
                </div>
            </div>
            <p class="text-white/80 text-sm mt-2">Design & Dev • 6 members</p>
        </a>
    </div>

    <!-- Tabs -->
    <div class="flex items-center gap-6 mb-2">
        <button class="text-sm font-semibold text-brand-700 border-b-2 border-brand-600 pb-2">Active Tasks</button>
        <button class="text-sm text-gray-500 hover:text-slate-900">Completed</button>
        <div class="ml-auto">
            <input
                class="rounded-xl bg-gray-100 border border-gray-200 py-2 px-3 text-sm outline-none focus:ring-2 focus:ring-brand-400"
                placeholder="Search">
        </div>
    </div>

    <ul class="divide-y">
        @include('partials.task-row', [
            'brand' => 'U',
            'title' => 'Uber',
            'desc' => 'App Design and Upgrades with new features – In Progress 16 days',
            'avatars' => [7, 8, 9],
        ])
        @include('partials.task-row', [
            'brand' => 'F',
            'title' => 'Facebook Ads',
            'desc' => 'Creative Cloud – Last worked 5 days ago',
            'avatars' => [10, 11, 12],
        ])
        @include('partials.task-row', [
            'brand' => 'P',
            'title' => 'Payoneer',
            'desc' => 'Dashboard Design – Due in 3 days',
            'avatars' => [13, 14, 15],
        ])
        @include('partials.task-row', [
            'brand' => 'UP',
            'title' => 'Upwork',
            'desc' => 'Developing – assigned 10 min ago',
            'avatars' => [16, 17, 18],
        ])
    </ul>
@endsection
