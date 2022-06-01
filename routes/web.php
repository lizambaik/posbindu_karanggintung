<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('kader')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Kader\IndexController::class, 'index'])->name('kader');
    // bagian pasien
    Route::get('pasien', [App\Http\Controllers\Kader\PasienController::class, 'index'])->name('kader.pasien');
    Route::post('pasien', [App\Http\Controllers\Kader\PasienController::class, 'getpasien'])->name('kader.pasien.ajax');
    Route::get('pasien/tambah', [App\Http\Controllers\Kader\PasienController::class, 'create'])->name('kader.tambah.pasien');
    Route::post('pasien/tambah', [App\Http\Controllers\Kader\PasienController::class, 'store'])->name('kader.simpan.pasien');
    Route::get('pasien/view/{id}', [App\Http\Controllers\Kader\PasienController::class, 'view'])->name('kader.pasien.view');
    Route::get('pasien/edit/{id}', [App\Http\Controllers\Kader\PasienController::class, 'edit'])->name('kader.pasien.edit');
    Route::delete('pasien/hapus/{id}', [App\Http\Controllers\Kader\PasienController::class, 'destroy'])->name('kader.pasien.hapus');

    Route::get('pasien/periksa', [App\Http\Controllers\Kader\IndexController::class, 'pemeriksaan'])->name('kader.periksa.pasien');
    Route::post('pasien/periksa', [App\Http\Controllers\Kader\PeriksaController::class, 'store'])->name('kader.cek.pasien');
});

Route::get('/excell', [App\Http\Controllers\ExcellController::class, 'index'])->name('rekap');
Route::post('/excell', [App\Http\Controllers\ExcellController::class, 'rekap'])->name('excell');
