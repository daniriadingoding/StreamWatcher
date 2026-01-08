<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citizen Fact-Check - StreamWatch</title>
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

    <main class="max-w-5xl mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Pusat Verifikasi Warga</h2>
            <p class="text-gray-400 max-w-2xl mx-auto italic">
                "Warga negara memiliki tanggung jawab teknis untuk menjaga kesehatan ekosistem informasi agar tidak
                memberi justifikasi bagi pemerintah melakukan sensor."
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 sticky top-24">
                    <h3 class="text-xl font-bold mb-4">Ajukan Verifikasi</h3>
                    <p class="text-xs text-gray-500 mb-6">Menemukan berita mencurigakan terkait demo atau sensor?
                        Laporkan di sini.</p>

                    <form action="#"
                        onsubmit="alert('Permintaan Verifikasi Terkirim! Tim relawan akan segera meninjau.'); return false;">
                        <div class="mb-4">
                            <label
                                class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Link/Judul
                                Berita</label>
                            <input type="text" placeholder="Masukkan URL atau Judul..." required
                                class="w-full bg-gray-900 border border-gray-700 rounded-lg p-3 text-sm focus:ring-2 focus:ring-red-500 focus:outline-none">
                        </div>
                        <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 py-3 rounded-xl font-bold transition">Kirim ke
                            Komunitas</button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Verifikasi Terbaru
                </h3>

                <div class="bg-gray-800 p-6 rounded-2xl border-l-4 border-green-500 shadow-lg">
                    <div class="flex justify-between items-start mb-4">
                        <span
                            class="bg-green-900/50 text-green-400 text-[10px] font-bold px-2 py-1 rounded border border-green-800 uppercase">Fakta</span>
                        <span class="text-xs text-gray-500">Diverifikasi: 2 jam yang lalu</span>
                    </div>
                    <h4 class="text-lg font-bold mb-2">Pemerintah Akui Batasi Live Streaming di Area Demo</h4>
                    <p class="text-sm text-gray-400 leading-relaxed mb-4">
                        Kemenkominfo menyatakan ada pembatasan fitur tertentu demi alasan keamanan nasional. Ini
                        mengonfirmasi laporan 61,9% warga yang menganggap pemblokiran melanggar hak.
                    </p>
                    <div class="text-xs text-blue-400 font-semibold italic">Sumber: Siaran Pers Resmi / Verifikasi
                        Komunitas</div>
                </div>

                <div class="bg-gray-800 p-6 rounded-2xl border-l-4 border-red-500 shadow-lg">
                    <div class="flex justify-between items-start mb-4">
                        <span
                            class="bg-red-900/50 text-red-400 text-[10px] font-bold px-2 py-1 rounded border border-red-800 uppercase">Hoaks</span>
                        <span class="text-xs text-gray-500">Diverifikasi: 5 jam yang lalu</span>
                    </div>
                    <h4 class="text-lg font-bold mb-2">Video: Sinyal Internet Sengaja Dimatikan di Seluruh Jakarta</h4>
                    <p class="text-sm text-gray-400 leading-relaxed mb-4">
                        Video yang beredar adalah rekaman lama tahun 2019. Hasil monitoring menunjukkan hanya fitur Live
                        Streaming aplikasi tertentu yang terdampak kebijakan, bukan pemutusan sinyal total.
                    </p>
                    <div class="text-xs text-blue-400 font-semibold italic">Sumber: Pencitraan Satelit / Laporan
                        Lapangan Warga</div>
                </div>

                <div class="bg-gray-800 p-6 rounded-2xl border-l-4 border-yellow-500 shadow-lg opacity-75">
                    <div class="flex justify-between items-start mb-4">
                        <span
                            class="bg-yellow-900/50 text-yellow-400 text-[10px] font-bold px-2 py-1 rounded border border-yellow-800 uppercase">Sedang
                            Menunggu Bukti</span>
                        <span class="text-xs text-gray-500">Diajukan: 10 menit yang lalu</span>
                    </div>
                    <h4 class="text-lg font-bold mb-2">Akun Instagram Jurnalis Demo Diblokir Massal</h4>
                    <p class="text-sm text-gray-400">
                        Sedang mengumpulkan data dari 11 responden yang menyatakan tidak setuju pemerintah berhak
                        memblokir siaran demi keamanan. 
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-16 border-t border-gray-800 py-8 text-center text-gray-500 text-sm">
        <p>Project Sosial PKn: Manifestasi SDG 16.10 dalam Akses Informasi Publik.</p>
    </footer>

</body>

</html>
