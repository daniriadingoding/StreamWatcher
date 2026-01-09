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

    <div class="bg-gray-800 pb-12 pt-8 px-4 border-b border-gray-700">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Pantau Transparansi Digital</h2>
            <p class="text-gray-400 max-w-3xl mx-auto text-lg">
                Masyarakat menolak sensor (61,9%) di tengah krisis kepercayaan terhadap transparansi pemerintah (57,1%
                buruk).
                Platform ini hadir untuk menjamin akses informasi publik sesuai target SDG 16.10.
            </p>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 -mt-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            @foreach ($platforms as $platform)
                <div
                    class="bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 p-6 transform hover:scale-[1.02] transition duration-300">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-900 rounded-lg">
                                <span
                                    class="font-bold text-sm">{{ strtoupper(substr($platform['name'], 0, 2)) }}</span>
                            </div>
                            <h3 class="text-xl font-bold">{{ $platform['name'] }}</h3>
                        </div>
                        <span
                            class="px-3 py-1 rounded-full text-[10px] font-bold bg-{{ $platform['color'] }}-900/50 text-{{ $platform['color'] }}-400 border border-{{ $platform['color'] }}-700">
                            {{ $platform['status'] }}
                        </span>
                    </div>

                    <div class="mb-6 text-center py-4 bg-gray-900/50 rounded-xl">
                        <p id="count-{{ $platform['icon'] }}" data-initial="{{ $platform['reports'] }}"
                            class="text-5xl font-bold text-{{ $platform['color'] }}-500">
                            {{ number_format($platform['reports']) }}
                        </p>
                        <p class="text-[10px] text-gray-500 uppercase tracking-widest mt-1">Laporan Gangguan Live</p>
                    </div>

                    <p class="text-sm text-gray-400 italic mb-4">"{{ $platform['message'] }}"</p>

                    <a href="{{ route('lapor') }}"
                        class="block w-full text-center bg-gray-700 hover:bg-gray-600 text-xs py-2 rounded-lg transition">
                        Lihat Detail Laporan
                    </a>
                </div>
            @endforeach
        </div>

        <div class="bg-gray-800 rounded-3xl border border-gray-700 p-8 mb-12 overflow-hidden relative">
            <div class="absolute top-0 right-0 p-8 opacity-5">
                <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                </svg>
            </div>

            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Solusi Paradoks Teknologi Informasi</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Data menunjukkan TI vital bagi demokrasi (61,9%), namun 71,4% responden mengakui adanya masalah
                        hoaks.
                        <br><br>
                        StreamWatch menghadirkan fitur **Verifikasi Warga** untuk melawan disinformasi tanpa sensor
                        pemerintah, mendukung terciptanya ekosistem informasi yang sehat.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('lapor') }}"
                            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg transition flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span>Lapor Sensor</span>
                        </a>
                        <a href="{{ route('factcheck') }}"
                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg transition flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Cek Fakta</span>
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('pustaka') }}"
                            class="text-gray-400 hover:text-white text-sm border-b border-gray-600 hover:border-white transition">
                            Pelajari Hak Digital Anda (UUD 1945 & SDG 16) &rarr;
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div
                        class="bg-gray-900 p-6 rounded-2xl text-center border border-gray-700 relative overflow-hidden group">
                        <div class="absolute inset-0 bg-red-900/10 group-hover:bg-red-900/20 transition"></div>
                        <div class="text-3xl font-bold text-red-500 mb-1">71,4%</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-tighter">Responden Mengakui Masalah
                            Hoaks</div>
                    </div>
                    <div
                        class="bg-gray-900 p-6 rounded-2xl text-center border border-gray-700 relative overflow-hidden group">
                        <div class="absolute inset-0 bg-green-900/10 group-hover:bg-green-900/20 transition"></div>
                        <div class="text-3xl font-bold text-green-500 mb-1">90,5%</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-tighter">TI Dinilai Positif untuk Opini
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="border-t border-gray-800 py-12 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-500 text-sm mb-2">&copy; 2025 Kelompok D - S1 Informatika Universitas Telkom</p>
            <div class="flex justify-center space-x-4 text-[10px] text-gray-600 uppercase tracking-widest font-bold">
                <span>SDG 16.6: Institusi Akuntabel</span>
                <span>•</span>
                <span>SDG 16.10: Akses Informasi</span>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Daftar platform yang sesuai dengan 'value' di halaman report dan 'icon' di web.php
            const platforms = ['tiktok', 'instagram', 'shopee'];

            platforms.forEach(platform => {
                // 1. Cek apakah ada laporan baru tersimpan di browser
                const storageKey = 'report_count_' + platform;
                const addedReports = parseInt(localStorage.getItem(storageKey) || 0);

                // 2. Jika ada, tambahkan ke angka yang tampil di layar
                if (addedReports > 0) {
                    const element = document.getElementById('count-' + platform);
                    if (element) {
                        // Ambil angka awal dari database/kode PHP (via data-initial)
                        const initialValue = parseInt(element.getAttribute('data-initial'));

                        // Hitung total baru
                        const newValue = initialValue + addedReports;

                        // Update teks di layar (gunakan toLocaleString agar ada format ribuan misal 1,240)
                        element.innerText = newValue.toLocaleString();
                    }
                }
            });
        });
    </script>
</body>

</html>
