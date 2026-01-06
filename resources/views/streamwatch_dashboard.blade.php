@extends('layouts.master')

@section('title', 'Dashboard Monitoring - StreamWatch')

@section('content')

    <div class="bg-gray-800 pb-12 pt-8 px-4 border-b border-gray-700">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Pantau Transparansi Digital</h2>
            <p class="text-gray-400 max-w-3xl mx-auto text-lg">
                Masyarakat menolak sensor (61,9%) di tengah krisis kepercayaan terhadap transparansi pemerintah (57,1%
                buruk).
                Platform ini hadir untuk menjamin akses informasi publik sesuai target **SDG 16.10**.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 -mt-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            @foreach ($platforms as $platform)
                <div
                    class="bg-gray-800 rounded-2xl shadow-2xl border border-gray-700 p-6 transform hover:scale-[1.02] transition duration-300">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-900 rounded-lg">
                                <span class="font-bold text-sm">{{ strtoupper(substr($platform['name'], 0, 2)) }}</span>
                            </div>
                            <h3 class="text-xl font-bold">{{ $platform['name'] }}</h3>
                        </div>
                        <span
                            class="px-3 py-1 rounded-full text-[10px] font-bold bg-{{ $platform['color'] }}-900/50 text-{{ $platform['color'] }}-400 border border-{{ $platform['color'] }}-700">
                            {{ $platform['status'] }}
                        </span>
                    </div>

                    <div class="mb-6 text-center py-4 bg-gray-900/50 rounded-xl">
                        <p class="text-5xl font-bold text-{{ $platform['color'] }}-500">
                            {{ number_format($platform['reports']) }}</p>
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
                        StreamWatch menghadirkan fitur **Verifikasi Warga** untuk melawan disinformasi tanpa sensor
                        pemerintah.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('lapor') }}"
                            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg transition">Lapor
                            Sensor</a>
                        <a href="{{ route('factcheck') }}"
                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-bold shadow-lg transition">Cek
                            Fakta</a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-900 p-6 rounded-2xl text-center border border-gray-700">
                        <div class="text-3xl font-bold text-red-500 mb-1">71,4%</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-tighter">Responden Mengakui Masalah Hoaks
                        </div>
                    </div>
                    <div class="bg-gray-900 p-6 rounded-2xl text-center border border-gray-700">
                        <div class="text-3xl font-bold text-green-500 mb-1">90,5%</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-tighter">TI Dinilai Positif untuk Opini
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
