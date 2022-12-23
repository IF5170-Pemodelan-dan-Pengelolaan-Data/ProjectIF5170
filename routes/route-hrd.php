<?php

use App\Http\Controllers\HRDController;
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

Route::middleware(['web'])->prefix('hrd')->name('hrd.')->group(function () {
    Route::get('/', [HRDController::class, 'index'])->name('home');

    // Route Pegawai
    Route::prefix('pegawai')->name('pegawai.')->group(function () {
        Route::get('/allcabang', [HRDController::class, 'pegawai_allcabang'])->name('allcabang');
        Route::get('/colorado', [HRDController::class, 'pegawai_colorado'])->name('colorado');
        Route::get('/california', [HRDController::class, 'pegawai_california'])->name('california');
        Route::get('/indonesia', [HRDController::class, 'pegawai_indonesia'])->name('indonesia');
        Route::get('/getJumlahPegawai', [HRDController::class, 'getJumlahPegawai'])->name('getJumlahPegawai');
        Route::get('/getJumlahProfesi', [HRDController::class, 'getJumlahProfesi'])->name('getJumlahProfesi');
    });
    // Route cuti
    Route::prefix('cuti')->name('cuti.')->group(function () {
        Route::get('/allcabang', [HRDController::class, 'cuti_allcabang'])->name('allcabang');
        Route::get('/colorado', [HRDController::class, 'cuti_colorado'])->name('colorado');
        Route::get('/california', [HRDController::class, 'cuti_california'])->name('california');
        Route::get('/indonesia', [HRDController::class, 'cuti_indonesia'])->name('indonesia');
    });
    // Route laporan
    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/histori', [HRDController::class, 'laporan_histori'])->name('histori');
        Route::get('/jumlah_pegawai', [HRDController::class, 'laporan_jumlah_pegawai'])->name('jumlah_pegawai');
        Route::get('/presensi_pegawai', [HRDController::class, 'laporan_presensi_pegawai'])->name('presensi_pegawai');
        Route::get('/pengajuan_cuti', [HRDController::class, 'laporan_pengajuan_cuti'])->name('pengajuan_cuti');
    });
});
