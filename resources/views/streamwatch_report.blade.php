<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lapor Sensor - StreamWatch</title>
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
                <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                <h1 class="text-xl font-bold tracking-tighter">Stream<span class="text-red-500">Watch</span></h1>
            </div>
            <div class="space-x-6 text-sm font-medium text-gray-400">
                <a href="{{ route('dashboard') }}" class="hover:text-white transition">Monitoring Live</a>
                <a href="{{ route('timeline') }}" class="hover:text-white transition">Arsip Sensor</a>
            </div>
        </div>
    </nav>

    <main class="max-w-2xl mx-auto px-4 py-12">
        <div class="bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 p-8">
            <h2 class="text-3xl font-bold mb-2">Formulir Laporan Warga</h2>
            <p class="text-gray-400 mb-8 text-sm">
                Bantu kami mendokumentasikan pembatasan akses informasi demi transparansi publik[cite: 38].
            </p>

            <form action="#" method="GET"
                onsubmit="alert('Laporan Berhasil Terkirim! Data Anda telah ditambahkan ke sistem pemantauan.'); window.location.href = '{{ route('dashboard') }}'; return false;">

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Platform yang Mengalami Sensor</label>
                    <select id="platformSelect" onchange="toggleOtherInput()"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-red-500 focus:outline-none">
                        <option value="tiktok">TikTok (Tombol Live Hilang)</option>
                        <option value="instagram">Instagram (Live Error/Koneksi Diputus)</option>
                        <option value="shopee">Shopee Live (Fitur Tidak Tersedia)</option>
                        <option value="others">Lainnya (Sebutkan Platform...)</option>
                    </select>
                </div>

                <div id="otherPlatformWrapper" class="mb-6 hidden animate-fade-in">
                    <label class="block text-sm font-semibold mb-2 text-red-400">Sebutkan Nama Platform</label>
                    <input type="text" id="otherPlatformName" placeholder="Contoh: Facebook, X, atau Zoom"
                        class="w-full bg-gray-900 border border-red-500/50 rounded-lg p-3 text-white focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Lokasi Terjadinya Pembatasan</label>
                    <input type="text" required placeholder="Contoh: Depan Gedung DPR, Jakarta Pusat"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Jenis Intervensi Platform</label>
                    <div class="space-y-3 mt-2 text-sm text-gray-300">
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="radio" name="gangguan" required
                                class="text-red-600 focus:ring-red-500 bg-gray-900 border-gray-700">
                            <span>Fitur siaran langsung (Live) tidak muncul di aplikasi</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="radio" name="gangguan"
                                class="text-red-600 focus:ring-red-500 bg-gray-900 border-gray-700">
                            <span>Siaran langsung diputus secara otomatis oleh sistem</span>
                        </label>
                    </div>
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-semibold mb-2">Detail Kejadian (Opsional)</label>
                    <textarea rows="4"
                        placeholder="Ceritakan kronologi kejadian, misalnya: 'Tiba-tiba tombol live hilang saat massa mulai berkumpul di depan gerbang...'"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-red-500 focus:outline-none"></textarea>
                    <p class="text-xs text-gray-500 mt-2 italic">Informasi ini membantu memperkuat bukti adanya
                        pelanggaran hak atas informasi sesuai target SDG 16.10[cite: 24, 28].</p>
                </div>

                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded-xl shadow-lg transition duration-200">
                    Kirim Laporan Publik
                </button>
            </form>
        </div>
    </main>

    <footer class="mt-8 text-center text-gray-600 text-xs px-4 pb-12">
        Aplikasi ini dikembangkan sebagai aksi nyata partisipasi warga negara dalam mewujudkan transparansi institusi
        sesuai tujuan SDG 16.6[cite: 25, 29].
    </footer>

    <script>
        function toggleOtherInput() {
            const select = document.getElementById('platformSelect');
            const wrapper = document.getElementById('otherPlatformWrapper');
            const input = document.getElementById('otherPlatformName');

            if (select.value === 'others') {
                wrapper.classList.remove('hidden');
                input.required = true;
                input.focus();
            } else {
                wrapper.classList.add('hidden');
                input.required = false;
                input.value = '';
            }
        }
    </script>

</body>

</html>
