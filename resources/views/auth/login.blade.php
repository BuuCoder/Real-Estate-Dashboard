<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — MJB.DASH</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen grid place-items-center bg-[#eef0f4] p-6">
    <div class="w-full max-w-md bg-white rounded-3xl shadow-panel p-8">
        <div class="flex items-center gap-2 mb-6">
            <span class="inline-block w-3 h-3 rounded-full bg-pink-500"></span>
            <span class="inline-block w-3 h-3 rounded-full bg-yellow-400"></span>
            <span class="inline-block w-3 h-3 rounded-full bg-emerald-400"></span>
            <h1 class="ml-3 text-xl font-extrabold">MJB.DASH</h1>
        </div>
        <h2 class="text-2xl font-bold mb-1">Welcome back</h2>
        <p class="text-sm text-gray-500 mb-6">Sign in to continue</p>
        @if($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input name="email" type="email" required
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Password</label>
                <input name="password" type="password" required
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            </div>
            <button class="w-full rounded-xl bg-brand-600 text-black border border-brand-600 py-2.5 font-semibold hover:bg-brand-700">Sign
                in</button>
        </form>
    </div>
</body>

</html>
