<?php

use App\Http\Controllers\PegawaiController;
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

Route::middleware(['web'])->prefix('pegawai')->name('pegawai.')->group(function () {
    Route::get('/', [PegawaiController::class, 'index'])->name('home');
    Route::get('/profil', [PegawaiController::class, 'profil'])->name('profil');
    Route::get('/cuti', [PegawaiController::class, 'cuti'])->name('cuti');
    Route::post('/store_cuti/{id}', [PegawaiController::class, 'store_cuti'])->name('store_cuti');
});
