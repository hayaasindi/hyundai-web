<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/kendaraan', function () {
    return view('kendaraan'); 
});

Route::get('/galeri', function () {
    return view('galeri'); 
});

Route::get('/kredit', function () {
    return view('kredit'); 
});

Route::get('/kontak', function () {
    return view('kontak'); 
});


Route::get('/kendaraan/{slug}', function ($slug) {


    $mobil = [

        'hyundai-creta'=>[
            'nama'=>'Hyundai Creta',
            'kategori'=>'SUV',
            'harga'=>'Rp 350 Juta',
            'gambar'=>'creta.png',
            'folder360'=>'creta',
            'deskripsi'=>'SUV modern dengan desain sporty dan teknologi Hyundai SmartSense.',
        ],


        'hyundai-palisade'=>[
            'nama'=>'Hyundai Palisade',
            'kategori'=>'SUV',
            'harga'=>'Rp 900 Juta',
            'gambar'=>'palisade.png',
            'folder360'=>'palisade',
            'deskripsi'=>'SUV premium dengan kenyamanan kelas atas.',
        ],


        'hyundai-stargazer'=>[
            'nama'=>'Hyundai Stargazer',
            'kategori'=>'MPV',
            'harga'=>'Rp 270 Juta',
            'gambar'=>'stargazer.png',
            'folder360'=>'stargazer',
            'deskripsi'=>'MPV keluarga dengan kabin luas.',
        ],


        'hyundai-ioniq-5'=>[
            'nama'=>'Hyundai Ioniq 5',
            'kategori'=>'EV',
            'harga'=>'Rp 700 Juta',
            'gambar'=>'ioniq5.png',
            'folder360'=>'ioniq5',
            'deskripsi'=>'Mobil listrik futuristik Hyundai.',
        ],


    ];



    if(!isset($mobil[$slug])){

        abort(404);

    }



    return view('detail-kendaraan', [

        'mobil'=>$mobil[$slug]

    ]);


});

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});