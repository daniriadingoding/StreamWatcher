<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $platforms = [
        [
            'name' => 'TikTok',
            'status' => 'RESTRICTED',
            'color' => 'red',
            'reports' => 1240,
            'message' => 'Fitur Live dinonaktifkan di area Jakarta Pusat.',
            'icon' => 'tiktok'
        ],
        [
            'name' => 'Instagram',
            'status' => 'WARNING',
            'color' => 'yellow',
            'reports' => 850,
            'message' => 'Koneksi Live tidak stabil, upload story lambat.',
            'icon' => 'instagram'
        ],
        [
            'name' => 'Shopee Live',
            'status' => 'SAFE',
            'color' => 'green',
            'reports' => 12,
            'message' => 'Layanan berjalan normal.',
            'icon' => 'shopee'
        ],
    ];

    return view('streamwatch_dashboard', compact('platforms'));
})->name('dashboard');

Route::get('/timeline', function () {
    return view('streamwatch_timeline');
})->name('timeline');

Route::get('/lapor', function () {
    return view('streamwatch_report');
})->name('lapor');

Route::get('/pustaka', function () {
    return view('streamwatch_library');
})->name('pustaka');

Route::get('/fact-check', function () {
    return view('streamwatch_factcheck');
})->name('factcheck');

Route::get('/dampak', function () {
    return view('streamwatch_impact');
})->name('dampak');

require __DIR__ . '/auth.php';
