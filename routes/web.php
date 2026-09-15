<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\JadwalSholatController;
use App\Http\Controllers\JadwalImamKhotibController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Halaman Awal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Semua Route Membutuhkan Login
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    /*
    |--------------------------------------------------------------------------
    | Pengurus
    |--------------------------------------------------------------------------
    */

    Route::resource('pengurus', PengurusController::class);


    /*
    |--------------------------------------------------------------------------
    | Inventaris
    |--------------------------------------------------------------------------
    */

    // Semua user bisa melihat inventaris
    Route::get('/inventaris', [InventarisController::class, 'index'])
        ->name('inventaris.index');

    // Detail inventaris - semua user
    Route::get('/inventaris/{inventaris}', [InventarisController::class, 'show'])
        ->name('inventaris.show');

    // Admin - kelola inventaris
    Route::middleware('admin')->group(function () {

        Route::get('/inventaris/create', [InventarisController::class, 'create'])
            ->name('inventaris.create');

        Route::post('/inventaris', [InventarisController::class, 'store'])
            ->name('inventaris.store');

        Route::get('/inventaris/{inventaris}/edit', [InventarisController::class, 'edit'])
            ->name('inventaris.edit');

        Route::put('/inventaris/{inventaris}', [InventarisController::class, 'update'])
            ->name('inventaris.update');

        Route::delete('/inventaris/{inventaris}', [InventarisController::class, 'destroy'])
            ->name('inventaris.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Kas Masjid
    |--------------------------------------------------------------------------
    */

    // Semua user
    Route::get('/kas-masjid', [KasController::class, 'index'])
        ->name('kas-masjid.index');

    // Admin
    Route::middleware('admin')->group(function () {

        Route::get('/kas-masjid/create', [KasController::class, 'create'])
            ->name('kas-masjid.create');

        Route::post('/kas-masjid', [KasController::class, 'store'])
            ->name('kas-masjid.store');

        Route::get('/kas-masjid/{kas}/edit', [KasController::class, 'edit'])
            ->name('kas-masjid.edit');

        Route::put('/kas-masjid/{kas}', [KasController::class, 'update'])
            ->name('kas-masjid.update');

        Route::delete('/kas-masjid/{kas}', [KasController::class, 'destroy'])
            ->name('kas-masjid.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Donasi
    |--------------------------------------------------------------------------
    */

    // Semua user
    Route::get('/donasi', [DonasiController::class, 'index'])
        ->name('donasi.index');

    // Admin
    Route::middleware('admin')->group(function () {

        Route::get('/donasi/create', [DonasiController::class, 'create'])
            ->name('donasi.create');

        Route::post('/donasi', [DonasiController::class, 'store'])
            ->name('donasi.store');

        Route::get('/donasi/{donasi}/edit', [DonasiController::class, 'edit'])
            ->name('donasi.edit');

        Route::put('/donasi/{donasi}', [DonasiController::class, 'update'])
            ->name('donasi.update');

        Route::delete('/donasi/{donasi}', [DonasiController::class, 'destroy'])
            ->name('donasi.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Jadwal Sholat
    |--------------------------------------------------------------------------
    */

    Route::resource('jadwal', JadwalSholatController::class)
        ->parameters([
            'jadwal' => 'jadwal',
        ]);


    /*
|--------------------------------------------------------------------------
| Jadwal Imam & Khotib
|--------------------------------------------------------------------------
*/

// Daftar jadwal - semua user
Route::get('/jadwal-imam', [JadwalImamKhotibController::class, 'index'])
    ->name('jadwal-imam.index');

// Admin - kelola jadwal
Route::middleware('admin')->group(function () {

    // Tambah jadwal
    Route::get('/jadwal-imam/create', [JadwalImamKhotibController::class, 'create'])
        ->name('jadwal-imam.create');

    Route::post('/jadwal-imam', [JadwalImamKhotibController::class, 'store'])
        ->name('jadwal-imam.store');

    // Edit jadwal
    Route::get('/jadwal-imam/{jadwalImamKhotib}/edit', [JadwalImamKhotibController::class, 'edit'])
        ->name('jadwal-imam.edit');

    Route::put('/jadwal-imam/{jadwalImamKhotib}', [JadwalImamKhotibController::class, 'update'])
        ->name('jadwal-imam.update');

    // Hapus jadwal
    Route::delete('/jadwal-imam/{jadwalImamKhotib}', [JadwalImamKhotibController::class, 'destroy'])
        ->name('jadwal-imam.destroy');
});

// Detail jadwal - semua user
Route::get('/jadwal-imam/{jadwalImamKhotib}', [JadwalImamKhotibController::class, 'show'])
    ->name('jadwal-imam.show');

    /*
    |--------------------------------------------------------------------------
    | Pengumuman
    |--------------------------------------------------------------------------
    */

    // Semua user
    Route::get('/pengumuman', [PengumumanController::class, 'index'])
        ->name('pengumuman.index');

    // Admin
    Route::middleware('admin')->group(function () {

        Route::get('/pengumuman/create', [PengumumanController::class, 'create'])
            ->name('pengumuman.create');

        Route::post('/pengumuman', [PengumumanController::class, 'store'])
            ->name('pengumuman.store');

        Route::get('/pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])
            ->name('pengumuman.edit');

        Route::put('/pengumuman/{pengumuman}', [PengumumanController::class, 'update'])
            ->name('pengumuman.update');

        Route::delete('/pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])
            ->name('pengumuman.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Laporan
    |--------------------------------------------------------------------------
    */

    Route::get('/laporan', [LaporanController::class, 'index'])
        ->name('laporan.index');


    /*
    |--------------------------------------------------------------------------
    | Pengaturan
    |--------------------------------------------------------------------------
    */

    Route::get('/pengaturan', [PengaturanController::class, 'index'])
        ->middleware('admin')
        ->name('pengaturan.index');

    Route::put('/pengaturan', [PengaturanController::class, 'update'])
        ->middleware('admin')
        ->name('pengaturan.update');


    /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    */

    Route::resource('user', UserController::class)
        ->middleware('admin');

});


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';