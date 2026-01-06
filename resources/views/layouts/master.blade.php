<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'StreamWatch')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animasi tambahan */
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-white antialiased flex flex-col min-h-screen">

    <nav class="bg-gray-800 border-b border-gray-700 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                <a href="{{ route('dashboard') }}"
                    class="text-xl font-bold tracking-tighter hover:opacity-80 transition">
                    Stream<span class="text-red-500">Watch</span>
                </a>
            </div>

            <div class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Monitoring Live
                </a>
                <a href="{{ route('timeline') }}"
                    class="{{ request()->routeIs('timeline') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Arsip Sensor
                </a>
                <a href="{{ route('factcheck') }}"
                    class="{{ request()->routeIs('factcheck') ? 'text-green-400 border-b-2 border-green-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Cek Fakta
                </a>
                <a href="{{ route('pustaka') }}"
                    class="{{ request()->routeIs('pustaka') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Pustaka Hak
                </a>
                <a href="{{ route('dampak') }}"
                    class="{{ request()->routeIs('dampak') ? 'text-blue-400 border-b-2 border-blue-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Dampak Sosial
                </a>
            </div>

            <div class="md:hidden">
                <button class="text-gray-400 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800 bg-gray-900 py-12 px-4 mt-auto">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-500 text-sm mb-4">&copy; 2025 Kelompok D - S1 Informatika Universitas Telkom</p>

            <div
                class="flex justify-center space-x-6 text-[10px] text-gray-600 uppercase tracking-widest font-bold mb-6">
                <span class="hover:text-red-500 transition cursor-default">SDG 16.6: Institusi Akuntabel</span>
                <span>•</span>
                <span class="hover:text-red-500 transition cursor-default">SDG 16.10: Akses Informasi</span>
            </div>

            <div class="text-xs text-gray-700 max-w-2xl mx-auto leading-relaxed">
                Aplikasi ini dikembangkan sebagai bagian dari Tugas Besar Mata Kuliah Pendidikan Kewarganegaraan (PKn).
                Data yang ditampilkan adalah simulasi untuk keperluan demonstrasi akademik.
            </div>
        </div>
    </footer>

</body>

</html>
