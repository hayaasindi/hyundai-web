<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\Admin\KendaraanController as AdminKendaraanController;
use App\Models\Kendaraan;
use App\Http\Controllers\BookingTestDriveController;
use App\Http\Controllers\Admin\BookingTestDriveController as AdminBookingTestDriveController;
use App\Http\Controllers\Admin\SimulasiKreditController;
use App\Http\Controllers\KreditController; 
use App\Http\Controllers\Admin\KonsultasiKreditController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    $mobil = Kendaraan::latest()->get();
    return view('Dashboard', compact('mobil'));
});

Route::get('/kendaraan', [KendaraanController::class, 'index'])
    ->name('kendaraan');

Route::get('/kendaraan/{slug}', [KendaraanController::class, 'show'])
    ->name('kendaraan.detail');

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kredit',[KreditController::class,'index'])
->name('kredit');

Route::post(
'/kredit-konsultasi',
[KreditController::class,'store']
)
->name('kredit.store');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::post(
    '/booking-test-drive',
    [BookingTestDriveController::class,'store']
)->name('booking.store');

        Route::get('/login',
            [LoginController::class,'index'])
            ->name('login');


            Route::post('/login',
            [LoginController::class,'login']);


            Route::post('/logout',
            [LoginController::class,'logout'])
            ->name('logout');

Route::prefix('admin')
->name('admin.')
->middleware(['auth','role:admin'])
->group(function(){

    Route::get('/', function(){

        $totalKendaraan = Kendaraan::count();
        $totalTestDrive = \App\Models\BookingTestDrive::count();
        $totalKonsultasiKredit = \App\Models\KonsultasiKredit::count();

        $kendaraanTerbaru = Kendaraan::latest()
            ->limit(5)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalKendaraan',
                'totalTestDrive',
                'totalKonsultasiKredit',
                'kendaraanTerbaru'
            )
        );


        })->name('dashboard');

        Route::resource(
            'kendaraan',
            AdminKendaraanController::class
        );

        Route::resource(
            'booking',
            AdminBookingTestDriveController::class
        );

        Route::resource(
            'simulasi',
            SimulasiKreditController::class
        );

        Route::resource(
            'konsultasi',
            KonsultasiKreditController::class
        );

        Route::delete(
            '/kendaraan/variant/{id}',
            [
            KendaraanController::class,
            'deleteVariant'
            ]
            )
            ->name('admin.kendaraan.variant.delete'
        );

    });