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
    <div class="min-h-screen p-3 md:p-10">
        <div class="mx-auto max-w-[1300px]">
            <div class="grid grid-cols-12 gap-6">
                <!-- overlay (mobile) -->
                <div id="sidebarBackdrop" class="fixed inset-0 bg-black/30 backdrop-blur-sm z-40 hidden md:hidden">
                </div>

                <!-- Sidebar -->
                <aside id="sidebar"
                    class="fixed inset-y-0 left-0 z-50 w-80 rounded-none md:rounded-3xl bg-white shadow-panel p-6
                            transform -translate-x-full transition-transform duration-300
                            md:translate-x-0 md:w-auto md:col-span-4 lg:col-span-3 md:sticky md:top-5 md:self-start"
                    style="max-height: 100vh; overflow-y: auto;">

                    <!-- header nhỏ chỉ hiện trên mobile -->
                    <div class="flex items-center justify-between md:hidden mb-4">
                        <span class="text-xl font-extrabold tracking-tight text-slate-900">MJB.DASH</span>
                        <button id="closeSidebar" class="p-2 rounded-xl bg-gray-100 hover:bg-gray-200">
                            <svg class="w-6 h-6 text-slate-700" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6l12 12M18 6L6 18" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                    </div>

                    <!-- 3 chấm màu -->
                    <div class="hidden md:flex items-center gap-3 mb-8">
                        <div class="w-3 h-3 rounded-full bg-pink-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                    </div>

                    <a href="#" class="hidden md:inline-flex items-center gap-2 mb-8">
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
                            <p class="px-3 text-gray-400 uppercase tracking-wider mb-2 fw-bold">MENU</p>
                            <ul class="space-y-2">
                                <li>
                                    <a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 @if (request()->is('dashboard')) bg-gray-100 font-semibold @endif"
                                        href="{{ url('/dashboard') }}">
                                        <!-- heroicon outline: squares-2x2 -->
                                        <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11 0h7v7h-7v-7zm0-11h7v7h-7V3z" />
                                        </svg>
                                        Tổng quan
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 @if (request()->is('users')) bg-gray-100 font-semibold @endif"
                                        href="{{ url('/users') }}">
                                        <!-- heroicon outline: users -->
                                        <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-6.13a4 4 0 11-8 0 4 4 0 018 0zm6 10v-2a4 4 0 00-3-3.87M9 20v-2a4 4 0 013-3.87" />
                                        </svg>
                                        Người dùng
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 @if (request()->is('listings*')) bg-gray-100 font-semibold @endif"
                                        href="/listings">
                                        <!-- heroicon outline: home-modern (listing) -->
                                        <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 9.75L12 4l9 5.75M4.5 10.5v7.25A2.25 2.25 0 006.75 20h10.5A2.25 2.25 0 0019.5 17.75V10.5" />
                                        </svg>
                                        Bài đăng
                                    </a>
                                </li>
                                <li>
                                    <button type="button"
                                        class="flex items-center w-full gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 transition
                                            {{ request()->is('posts*') || request()->is('post-types*') || request()->is('tags*') ? 'bg-gray-100 font-semibold' : '' }}"
                                        onclick="toggleSubMenu(this)">
                                        <!-- heroicon outline: newspaper (blog) -->
                                        <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M19.5 6.75V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.75M19.5 6.75A2.25 2.25 0 0017.25 4.5H6.75A2.25 2.25 0 004.5 6.75m15 0v12.75a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.75" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M8.25 9.75h7.5m-7.5 3h7.5m-7.5 3h4.5" />
                                        </svg>
                                        Bài viết
                                        <!-- Chevron icon -->
                                        <svg class="ml-auto w-4 h-4 text-gray-400 transition-transform submenu-chevron" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                    <ul class="pl-8 mt-1 space-y-1 hidden submenu-list">
                                        <li>
                                            <a class="flex items-center gap-2 px-2 py-1 rounded hover:bg-gray-100 {{ request()->is('posts*') ? 'bg-gray-100 font-semibold' : '' }}"
                                                href="/posts">
                                                <!-- icon -->
                                                <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                        d="M4 6h16M4 12h16M4 18h16" />
                                                </svg>
                                                Danh sách bài viết
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-2 px-2 py-1 rounded hover:bg-gray-100 {{ request()->is('post-types*') ? 'bg-gray-100 font-semibold' : '' }}"
                                                href="/post-types">
                                                <!-- icon -->
                                                <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="6" stroke-width="1.5" />
                                                </svg>
                                                Loại
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-2 px-2 py-1 rounded hover:bg-gray-100 {{ request()->is('tags*') ? 'bg-gray-100 font-semibold' : '' }}"
                                                href="/tags">
                                                <!-- icon -->
                                                <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <rect x="6" y="6" width="12" height="12" rx="2" stroke-width="1.5" />
                                                </svg>
                                                Thẻ
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <script>
                                    function toggleSubMenu(btn) {
                                        const submenu = btn.nextElementSibling;
                                        const chevron = btn.querySelector('.submenu-chevron');
                                        if (submenu.classList.contains('hidden')) {
                                            submenu.classList.remove('hidden');
                                            chevron.classList.add('rotate-90');
                                        } else {
                                            submenu.classList.add('hidden');
                                            chevron.classList.remove('rotate-90');
                                        }
                                    }
                                    // Auto open if current route matches
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const btn = document.querySelector('button[onclick^="toggleSubMenu"]');
                                        if (
                                            window.location.pathname.startsWith('/posts') ||
                                            window.location.pathname.startsWith('/post-types') ||
                                            window.location.pathname.startsWith('/tags')
                                        ) {
                                            if (btn) toggleSubMenu(btn);
                                        }
                                    });
                                </script>
                                <li>
                                    <a class="flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-gray-100 @if (request()->is('geo*')) bg-gray-100 font-semibold @endif"
                                        href="{{ url('/geo') }}">
                                        <svg class="w-5 h-5 text-brand-600" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 21c4.97-4.97 8-8.06 8-11.5A8 8 0 1 0 4 9.5C4 12.94 7.03 16.03 12 21z" />
                                            <circle cx="12" cy="9.5" r="2.5" />
                                        </svg>
                                        Địa lý VN
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="px-3 text-gray-400 uppercase tracking-wider font-semi mb-2">Profile & Settings
                            </p>
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
                <main class="col-span-12 md:col-span-8 lg:col-span-9 rounded-3xl bg-white shadow-panel">
                    <!-- Topbar -->
                    <div class="flex items-center justify-between gap-4 p-6 border-b flex-wrap">
                        <div class="flex items-center justify-between gap-4">
                            <!-- nút mở sidebar - chỉ hiện trên mobile -->
                            <button id="openSidebar"
                                class="md:hidden mr-2 p-2 rounded-xl bg-gray-100 hover:bg-gray-200">
                                <!-- icon hamburger -->
                                <svg class="w-6 h-6 text-slate-700" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor">
                                    <path stroke-width="1.5" stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                                </svg>
                                <span class="sr-only">Open menu</span>
                            </button>
                            <div>
                                <h1 class="text-md lg:text-2xl font-extrabold text-slate-900">@yield('heading', 'Welcome to Planti.')</h1>
                                <p class="text-gray-500 text-xs lg:text-sm">Hello Shakir, welcome back!</p>
                            </div>
                        </div>
                        <div class="flex-1 max-w-lg md:w-full">
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

                    <div class="min-h-[87vh] p-3 md:p-6">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

<script>
    (function() {
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebarBackdrop');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            backdrop.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // khoá scroll khi mở
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            backdrop.classList.add('hidden');
            document.body.style.overflow = '';
        }

        openBtn?.addEventListener('click', openSidebar);
        closeBtn?.addEventListener('click', closeSidebar);
        backdrop?.addEventListener('click', closeSidebar);
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSidebar();
        });

        // đảm bảo trạng thái đúng khi resize
        const mq = window.matchMedia('(min-width: 768px)');
        mq.addEventListener?.('change', (e) => {
            if (e.matches) { // desktop
                sidebar.classList.remove('-translate-x-full');
                backdrop.classList.add('hidden');
                document.body.style.overflow = '';
            } else { // mobile
                sidebar.classList.add('-translate-x-full');
            }
        });
    })();
</script>

</html>
