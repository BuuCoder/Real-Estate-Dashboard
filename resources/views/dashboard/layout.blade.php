<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') — MJB.DASH</title>
    <!-- Manrope font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind via CDN for quick preview. For production, switch to Vite+Tailwind. -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Manrope', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    borderRadius: {
                        'xl2': '1rem',
                        '3xl': '1.5rem'
                    },
                    colors: {
                        brand: {
                            DEFAULT: '#6C5CE7',
                            50: '#F2F1FF',
                            100: '#E6E4FE',
                            200: '#C9C3FD',
                            300: '#ADA2FB',
                            400: '#907FF9',
                            500: '#735DF7',
                            600: '#6C5CE7',
                            700: '#5A4ECB',
                            800: '#493FA6',
                            900: '#362E7A'
                        },
                        accent: '#FF6B6B',
                        warm: '#FFB86C',
                        mint: '#A7F3D0',
                        slate: {
                            950: '#0B1020'
                        }
                    },
                    boxShadow: {
                        'soft': '0 8px 30px rgba(0,0,0,0.08)',
                        'panel': '0 20px 40px rgba(0,0,0,0.06)'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Manrope', ui-sans-serif, system-ui, sans-serif;
        }
    </style>
</head>

<body class="bg-[#eef0f4]">
    <div class="min-h-screen p-6 md:p-10">
        <div class="mx-auto max-w-[1300px]">
            <div class="grid grid-cols-12 gap-6">
                <!-- Sidebar -->
                <aside class="col-span-12 md:col-span-4 lg:col-span-2 rounded-3xl bg-white shadow-panel p-6">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-3 h-3 rounded-full bg-pink-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 mb-8">
                        <span class="text-xl font-extrabold tracking-tight text-slate-900">MJB.DASH</span>
                    </a>
                    <div class="flex items-center gap-3 mb-6">
                        <img class="w-12 h-12 rounded-full ring-2 ring-emerald-400"
                            src="https://i.pravatar.cc/100?img=3" alt="avatar">
                        <div>
                            <p class="text-sm font-semibold">MajinBuu</p>
                        </div>
                    </div>

                    <nav class="space-y-6 text-sm">
                        <div>
                            <p class="px-3 text-gray-400 uppercase tracking-wider mb-2 fw-bold">DASHBOARD</p>
                            <ul class="space-y-2">
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 @if (request()->is('dashboard')) bg-gray-100 font-semibold @endif"
                                        href="{{ url('/dashboard') }}">
                                        <!-- heroicon outline: squares-2x2 -->
                                        <svg class="w-5 h-5 text-brand-600" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M4 6h6v6H4V6zm0 12h6v-6H4v6zm10 0h6v-6h-6v6zm0-12h6v6h-6V6z" />
                                        </svg>
                                        Dashboard
                                    </a></li>
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 @if (request()->is('tasks*')) bg-gray-100 font-semibold @endif"
                                        href="{{ url('/tasks') }}">
                                        <svg class="w-5 h-5 text-brand-600" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 12l2 2 4-4m-9 9h12M5 5h14" />
                                        </svg>
                                        Tasks
                                    </a></li>
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100"
                                        href="#">
                                        <svg class="w-5 h-5 text-brand-600" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0l-8 5-8-5" />
                                        </svg>
                                        Explore
                                    </a></li>
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100"
                                        href="#">
                                        <svg class="w-5 h-5 text-brand-600" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 7h18M3 12h18M3 17h18" />
                                        </svg>
                                        Projects
                                    </a></li>
                            </ul>
                        </div>
                        <div>
                            <p class="px-3 text-gray-400 uppercase tracking-wider mb-2">Profile & Settings</p>
                            <ul class="space-y-2">
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100"
                                        href="#">Charts</a></li>
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100"
                                        href="#">Billing</a></li>
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100"
                                        href="#">Profile</a></li>
                                <li><a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100"
                                        href="#">Settings</a></li>
                            </ul>
                        </div>
                    </nav>
                </aside>

                <!-- Content -->
                <main class="col-span-12 md:col-span-8 lg:col-span-7 rounded-3xl bg-white shadow-panel">
                    <!-- Topbar -->
                    <div class="flex items-center justify-between gap-4 p-6 border-b">
                        <div>
                            <h1 class="text-2xl font-extrabold text-slate-900">@yield('heading', 'Welcome to Planti.')</h1>
                            <p class="text-gray-500 text-sm">Hello Shakir, welcome back!</p>
                        </div>
                        <div class="flex-1 max-w-lg">
                            <div class="relative">
                                <input
                                    class="w-full rounded-2xl bg-gray-100 border border-gray-200 py-2.5 pl-10 pr-12 outline-none focus:ring-2 focus:ring-brand-400"
                                    placeholder="Search Dashboard">
                                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                                </svg>
                                <button
                                    class="absolute right-2 top-1.5 px-3 py-1 text-sm bg-brand-600 text-white rounded-xl hover:bg-brand-700">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        @yield('content')
                    </div>
                </main>

                <!-- Right Panel -->
                <aside class="col-span-12 lg:col-span-3 rounded-3xl bg-[#f7f3ef] shadow-panel p-6">
                    <div class="flex items-center justify-end gap-2 mb-6">
                        <button class="p-2 rounded-full bg-white shadow-soft hover:shadow"><svg class="w-5 h-5"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 10h8M8 14h5m-7 7h10a2 2 0 002-2V5a2 2 0 00-2-2H6a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg></button>
                        <button class="p-2 rounded-full bg-white shadow-soft hover:shadow"><img
                                class="w-6 h-6 rounded-full" src="https://i.pravatar.cc/100?img=11" /></button>
                    </div>

                    <div class="mb-5">
                        <p class="text-xs text-gray-500 mb-2">30 minute call with Client</p>
                        <h3 class="font-semibold text-slate-900">Project Discovery Call</h3>
                    </div>

                    <div class="bg-white rounded-2xl p-4 shadow-soft mb-6">
                        <div class="flex items-center justify-between">
                            <div class="flex -space-x-2">
                                <img class="w-6 h-6 rounded-full ring-2 ring-white"
                                    src="https://i.pravatar.cc/100?img=1">
                                <img class="w-6 h-6 rounded-full ring-2 ring-white"
                                    src="https://i.pravatar.cc/100?img=2">
                                <img class="w-6 h-6 rounded-full ring-2 ring-white"
                                    src="https://i.pravatar.cc/100?img=4">
                                <img class="w-6 h-6 rounded-full ring-2 ring-white"
                                    src="https://i.pravatar.cc/100?img=5">
                            </div>
                            <div class="text-sm font-semibold">28:35</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mb-6">
                        @include('partials.stat-card', [
                            'title' => 'Planned Today',
                            'value' => 18,
                            'bg' => 'bg-pink-100',
                        ])
                        @include('partials.stat-card', [
                            'title' => 'Finished Yesterday',
                            'value' => 12,
                            'bg' => 'bg-purple-100',
                        ])
                        @include('partials.stat-card', [
                            'title' => 'Due This Week',
                            'value' => 24,
                            'bg' => 'bg-emerald-100',
                        ])
                        @include('partials.stat-card', [
                            'title' => 'Overdue',
                            'value' => 4,
                            'bg' => 'bg-yellow-100',
                        ])
                    </div>

                    @include('partials.calendar')
                </aside>
            </div>
        </div>
    </div>
</body>

</html>
