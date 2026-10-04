<?php

use Illuminate\Support\Facades\Route;

// 1. Route Home (/)
Route::get('/', function () {
    return view('home');
});

// 2. Route About/Katalog (/about) - Menampilkan Data Dinamis Array Barang
Route::get('/about', function () {
    $daftarBarang = [
        [
            'kode' => 'BRG-001',
            'nama' => 'Laptop ASUS Vivobook 14',
            'kategori' => 'Elektronik',
            'harga' => 8500000,
            'stok' => 12
        ],
        [
            'kode' => 'BRG-002',
            'nama' => 'Mouse Wireless Logitech',
            'kategori' => 'Aksesoris',
            'harga' => 175000,
            'stok' => 30
        ],
        [
            'kode' => 'BRG-003',
            'nama' => 'Mechanical Keyboard RGB',
            'kategori' => 'Aksesoris',
            'harga' => 450000,
            'stok' => 15
        ],
        [
            'kode' => 'BRG-004',
            'nama' => 'Monitor LED 24 Inch Full HD',
            'kategori' => 'Elektronik',
            'harga' => 1400000,
            'stok' => 8
        ],
    ];

    return view('about', compact('daftarBarang'));
});

// 3. Route Contact (/contact)
Route::get('/contact', function () {
    $kontak = [
        'email' => 'admin@tokobarang.com',
        'lokasi' => 'Medan, Sumatera Utara'
    ];

    return view('contact', compact('kontak'));
});

// BONUS: Route parameter /hello/{nama}
Route::get('/hello/{nama}', function ($nama) {
    return "<div style='font-family: sans-serif; text-align: center; margin-top: 50px;'>"
         . "<h1>Halo, Selamat Datang <u>" . e($nama) . "</u> di Sistem Inventaris Barang!</h1>"
         . "<p><a href='/'>&larr; Kembali ke Beranda</a></p>"
         . "</div>";
});