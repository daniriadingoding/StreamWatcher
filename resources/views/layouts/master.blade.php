<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'StreamWatch - Pantau Sensor Digital')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white antialiased flex flex-col min-h-screen">

    <nav class="bg-gray-800 border-b border-gray-700 p-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div
                    class="w-3 h-3 bg-red-500 rounded-full {{ request()->routeIs('dashboard') ? 'animate-pulse' : '' }}">
                </div>
                <h1 class="text-xl font-bold tracking-tighter">Stream<span class="text-red-500">Watch</span></h1>
            </div>

            <div class="space-x-6 text-sm font-medium hidden md:block">
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Monitoring Live
                </a>

                <a href="{{ route('timeline') }}"
                    class="{{ request()->routeIs('timeline') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Arsip Sensor
                </a>

                <a href="{{ route('factcheck') }}"
                    class="{{ request()->routeIs('factcheck') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Cek Fakta
                </a>

                <a href="{{ route('dampak') }}"
                    class="{{ request()->routeIs('dampak') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Dampak Sosial
                </a>

                <a href="{{ route('pustaka') }}"
                    class="{{ request()->routeIs('pustaka') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Pustaka Hak
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800 py-12 px-4 bg-gray-900 mt-auto">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-500 text-sm mb-2">&copy; 2025 Kelompok D - S1 Informatika Universitas Telkom</p>
            <div class="flex justify-center space-x-4 text-[10px] text-gray-600 uppercase tracking-widest font-bold">
                <span>SDG 16.6: Institusi Akuntabel</span>
                <span>•</span>
                <span>SDG 16.10: Akses Informasi</span>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>
