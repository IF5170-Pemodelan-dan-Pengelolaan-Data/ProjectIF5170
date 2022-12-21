<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['web'])->prefix('manager')->name('manager.')->group(function () {
    Route::get('/', [ManagerController::class, 'index'])->name('home');

    // Route Pegawai
    Route::prefix('pegawai')->name('pegawai.')->group(function () {
        Route::get('/mycabang', [ManagerController::class, 'pegawai_mycabang'])->name('mycabang');
    });
    // Route cuti
    Route::prefix('cuti')->name('cuti.')->group(function () {
        Route::get('/mycabang', [ManagerController::class, 'cuti_mycabang'])->name('mycabang');
    });
    // Route laporan
    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/histori', [ManagerController::class, 'laporan_histori'])->name('histori');
        Route::get('/jumlah_pegawai', [ManagerController::class, 'laporan_jumlah_pegawai'])->name('jumlah_pegawai');
        Route::get('/presensi_pegawai', [ManagerController::class, 'laporan_presensi_pegawai'])->name('presensi_pegawai');
        Route::get('/pengajuan_cuti', [ManagerController::class, 'laporan_pengajuan_cuti'])->name('pengajuan_cuti');
    });
});
