<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pustaka Hak Digital - StreamWatch</title>
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

    <main class="max-w-4xl mx-auto px-4 py-12">
        <header class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Pustaka Hak Digital</h2>
            <p class="text-gray-400">Memahami landasan hukum dan kerangka global yang melindungi kebebasan berpendapat
                Anda di era digital.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-800 p-8 rounded-2xl border border-gray-700 shadow-xl">
                <div class="w-12 h-12 bg-red-900/50 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                        </path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">UUD 1945 Pasal 28F</h3>
                <p class="text-gray-300 leading-relaxed mb-4">
                    "Setiap orang berhak untuk berkomunikasi dan memperoleh informasi untuk mengembangkan pribadi dan
                    lingkungan sosialnya, serta berhak untuk mencari, memperoleh, memiliki, menyimpan, mengolah, dan
                    menyampaikan informasi dengan menggunakan segala jenis saluran yang tersedia."
                </p>
                <div class="text-xs text-gray-500 uppercase tracking-widest">Jaminan Konstitusional Kebebasan
                    Berpendapat</div>
            </div>

            <div class="bg-gray-800 p-8 rounded-2xl border border-gray-700 shadow-xl">
                <div class="w-12 h-12 bg-blue-900/50 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                        </path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Sustainable Development Goals (SDG) 16</h3>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-start space-x-3">
                        <span class="text-blue-500 font-bold">16.10</span>
                        <span><strong>Akses Informasi:</strong> Menjamin akses publik terhadap informasi dan melindungi
                            kebebasan mendasar.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-blue-500 font-bold">16.6</span>
                        <span><strong>Transparansi:</strong> Mengembangkan institusi yang efektif, akuntabel, dan
                            transparan di semua tingkatan.</span>
                    </li>
                </ul>
            </div>
        </div>

        <section class="mt-12 bg-gray-800/50 p-8 rounded-2xl border border-gray-700">
            <h3 class="text-2xl font-bold mb-6 text-center">Mengapa Literasi Hak Digital Penting?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm text-center">
                <div class="p-4">
                    <div class="text-red-400 font-bold text-lg mb-2">Proteksi</div>
                    <p class="text-gray-400">Melindungi diri dari risiko kriminalisasi saat menyampaikan pendapat yang
                        jujur.</p>
                </div>
                <div class="p-4">
                    <div class="text-red-400 font-bold text-lg mb-2">Kesehatan Informasi</div>
                    <p class="text-gray-400">Menjaga ekosistem informasi agar tidak memberi justifikasi sensor
                        pemerintah.</p>
                </div>
                <div class="p-4">
                    <div class="text-red-400 font-bold text-lg mb-2">Pengawasan Publik</div>
                    <p class="text-gray-400">Memastikan institusi tetap transparan dan akuntabel sesuai prinsip
                        demokrasi.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-16 border-t border-gray-800 py-8 text-center text-gray-500 text-sm">
        <p>Project Sosial PKn: Integrasi Keilmuan Informatika dengan SDG 16.</p>
    </footer>

</body>

</html>
