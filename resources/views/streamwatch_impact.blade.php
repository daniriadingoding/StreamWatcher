<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dampak & Testimoni - StreamWatch</title>
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
                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                <h1 class="text-xl font-bold tracking-tighter">Stream<span class="text-red-500">Watch</span></h1>
            </div>
            <div class="space-x-6 text-sm font-medium text-gray-400">
                <a href="{{ route('dashboard') }}" class="hover:text-white transition">Monitoring Live</a>
                <a href="{{ route('timeline') }}" class="hover:text-white transition">Arsip Sensor</a>
                <a href="{{ route('factcheck') }}" class="hover:text-white transition">Cek Fakta</a>
                <a href="{{ route('dampak') }}" class="text-red-400 border-b-2 border-red-500 pb-1">Dampak Sosial</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-12">

        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Dampak Sosial Nyata</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                Implementasi proyek StreamWatch telah memberdayakan warga untuk sadar akan hak digital mereka dan
                berpartisipasi aktif dalam pengawasan demokrasi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-gray-800 p-6 rounded-2xl text-center border border-gray-700">
                <div class="text-4xl font-bold text-red-500 mb-2">150+</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest">Laporan Masuk</div>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl text-center border border-gray-700">
                <div class="text-4xl font-bold text-blue-500 mb-2">500+</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest">Warga Terdukasi</div>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl text-center border border-gray-700">
                <div class="text-4xl font-bold text-green-500 mb-2">25</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest">Hoaks Terbantahkan</div>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl text-center border border-gray-700">
                <div class="text-4xl font-bold text-purple-500 mb-2">3</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest">Kampus Terlibat</div>
            </div>
        </div>

        <div class="mb-16">
            <h3 class="text-2xl font-bold mb-6 border-l-4 border-red-500 pl-4">Dokumentasi Video & Sosialisasi</h3>
            <div class="bg-black rounded-2xl overflow-hidden shadow-2xl aspect-video relative group">
                <div class="absolute inset-0 flex items-center justify-center bg-gray-800">
                    <div class="text-center">
                        <svg class="w-20 h-20 text-red-600 mx-auto mb-4 opacity-80" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z">
                            </path>
                        </svg>
                        <p class="text-gray-400 font-bold">Video Proyek Sosial Belum Diunggah</p>
                        <p class="text-xs text-gray-500 mt-2">Upload ke IG/YouTube lalu tempel link embed di kode ini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="#" class="text-red-400 hover:text-red-300 text-sm font-semibold">Lihat Postingan
                    Instagram @dcs.telkomuniversity &rarr;</a>
            </div>
        </div>

        <div class="mb-16">
            <h3 class="text-2xl font-bold mb-8 border-l-4 border-blue-500 pl-4">Apa Kata Mereka?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-gray-800 p-8 rounded-tr-[3rem] rounded-bl-[3rem] border border-gray-700 relative">
                    <svg class="w-10 h-10 text-gray-600 absolute top-4 left-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z">
                        </path>
                    </svg>
                    <p class="text-gray-300 italic mb-6 mt-6 relative z-10">
                        "Awalnya saya takut merekam demo karena isu penangkapan. Tapi lewat fitur Pustaka StreamWatch,
                        saya jadi paham bahwa merekam adalah hak konstitusional saya yang dilindungi UUD 1945."
                    </p>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <div>
                            <div class="font-bold text-white">Raka (Mahasiswa)</div>
                            <div class="text-xs text-gray-500">Peserta Aksi Bandung</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 p-8 rounded-tr-[3rem] rounded-bl-[3rem] border border-gray-700 relative">
                    <svg class="w-10 h-10 text-gray-600 absolute top-4 left-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z">
                        </path>
                    </svg>
                    <p class="text-gray-300 italic mb-6 mt-6 relative z-10">
                        "Sangat membantu! Kemarin fitur Live IG error, saya kira sinyal. Ternyata pas cek Dashboard
                        StreamWatch, memang lagi ada pembatasan masif. Akhirnya saya rekam offline dulu."
                    </p>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <div>
                            <div class="font-bold text-white">Sarah (Jurnalis Kampus)</div>
                            <div class="text-xs text-gray-500">Pengguna Aktif</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 p-8 rounded-tr-[3rem] rounded-bl-[3rem] border border-gray-700 relative">
                    <svg class="w-10 h-10 text-gray-600 absolute top-4 left-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z">
                        </path>
                    </svg>
                    <p class="text-gray-300 italic mb-6 mt-6 relative z-10">
                        "Aplikasi ini adalah bukti bahwa anak IT bisa berkontribusi buat demokrasi. Fitur Cek Fakta-nya
                        efektif banget buat ngelawan hoax yang sering dipake pemerintah buat alasan blokir."
                    </p>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <div>
                            <div class="font-bold text-white">Budi (Aktivis)</div>
                            <div class="text-xs text-gray-500">Relawan Fact-Checker</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <h3 class="text-2xl font-bold mb-6 border-l-4 border-green-500 pl-4">Galeri Kegiatan Lapangan</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-800 h-40 rounded-xl flex items-center justify-center border border-gray-700">
                    <span class="text-gray-600 text-xs">Foto Sosialisasi 1</span>
                </div>
                <div class="bg-gray-800 h-40 rounded-xl flex items-center justify-center border border-gray-700">
                    <span class="text-gray-600 text-xs">Foto Sosialisasi 2</span>
                </div>
                <div class="bg-gray-800 h-40 rounded-xl flex items-center justify-center border border-gray-700">
                    <span class="text-gray-600 text-xs">Foto Sosialisasi 3</span>
                </div>
                <div class="bg-gray-800 h-40 rounded-xl flex items-center justify-center border border-gray-700">
                    <span class="text-gray-600 text-xs">Foto Sosialisasi 4</span>
                </div>
            </div>
        </div>

    </main>

    <footer class="mt-12 border-t border-gray-800 py-8 text-center text-gray-500 text-sm">
        <p>Project Sosial PKn - Kelompok D - 2025/2026</p>
    </footer>

</body>

</html>
