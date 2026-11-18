<?php

use Illuminate\Support\Facades\Route;

// Page 1: Welcome Page
Route::get('/', function () {
    $namaPanggilan = "Jini"; 
    return view('welcome', ['nama' => $namaPanggilan]);
});

// Page 2: About Me (Data & Looping Keahlian/Makanan)
Route::get('/about', function () {
    $profil = [
        'nama' => 'Jini Yufrianty Fallo',
        'nim' => '2501010309',
        'hobbies' => ['Listening to Music', 'Dancing', 'Trying New Things'],
        'favorite_food' => [
            'Chicken Noodles and Other Noodles', 
            'All Things Chocolate'
        ],
        'socials' => 'https://www.instagram.com/__vianntttt.yyy?obrf=am4yNXU3eDNraWlk'
    ];
    return view('about', compact('profil'));
});

// Page 3: Gallery (Looping Galeri Foto termasuk Foto Profil)
Route::get('/gallery', function () {
    $galeri = [
        ['judul' => 'Character Portrait', 'url' => asset('profile.jpeg')],
        ['judul' => 'Shadow Mirror', 'url' => asset('galeri1.jpeg')],
        ['judul' => 'Midnight Breeze', 'url' => asset('galeri2.jpeg')],
        ['judul' => 'Gothic Portrait', 'url' => asset('galeri3.jpeg')],
    ];
    return view('gallery', compact('galeri'));
});