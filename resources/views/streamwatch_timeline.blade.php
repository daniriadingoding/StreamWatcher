<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Monitoring - StreamWatch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white antialiased">

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

                <a href="{{ route('pustaka') }}"
                    class="{{ request()->routeIs('pustaka') ? 'text-red-400 border-b-2 border-red-500 pb-1' : 'text-gray-400 hover:text-white transition' }}">
                    Pustaka Hak
                </a>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold mb-8 border-l-4 border-red-500 pl-4">Kronologi Pembatasan Digital</h2>

        <div class="relative border-l border-gray-700 ml-4 space-y-12">
            <div class="mb-8 ml-8 relative">
                <span class="absolute -left-11 top-1 bg-red-600 w-6 h-6 rounded-full border-4 border-gray-900"></span>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-750 transition">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Pemblokiran Fitur Live TikTok (Demo Besar)</h3>
                        <span class="text-sm text-red-400 font-mono">20 Agt 2025 - 14:00 WIB</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Pemerintah memerintahkan pembatasan fitur siaran langsung dengan alasan "mencegah provokasi".
                        Dampak: 4.500 laporan masuk dalam 2 jam.
                    </p>
                    <div class="inline-block bg-red-900/30 text-red-300 text-xs px-2 py-1 rounded border border-red-800">
                        Status: Dikonfirmasi Melanggar Hak Digital
                    </div>
                </div>
            </div>

            <div class="mb-8 ml-8 relative">
                <span class="absolute -left-11 top-1 bg-yellow-500 w-6 h-6 rounded-full border-4 border-gray-900"></span>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-white">Throttling Instagram</h3>
                        <span class="text-sm text-yellow-400 font-mono">14 Feb 2025 - 09:00 WIB</span>
                    </div>
                    <p class="text-gray-400">
                        Akses upload Instagram Story melambat drastis di area sekitar Gedung DPR. Video gagal terunggah.
                    </p>
                </div>
            </div>

            <div class="mb-8 ml-8 relative">
                <span class="absolute -left-11 top-1 bg-blue-500 w-6 h-6 rounded-full border-4 border-gray-900"></span>
                <div class="bg-blue-900/20 border border-blue-800 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-blue-100">Rilis Laporan Tahunan SDG 16.10</h3>
                        <span class="text-sm text-blue-400 font-mono">01 Jan 2025</span>
                    </div>
                    <p class="text-gray-300">
                        StreamWatch merilis data tahunan yang menunjukkan tren peningkatan sensor digital sebesar 40%
                        dibandingkan tahun sebelumnya. Data ini diserahkan ke koalisi masyarakat sipil.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
