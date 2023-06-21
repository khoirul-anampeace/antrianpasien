<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\SessionController;
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

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Pasien
Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');
Route::get('/pasien/detail/{id}', [PasienController::class, 'detail'])->middleware('auth');
Route::get('/pasien/create', [PasienController::class, 'create'])->middleware('auth');



// Dokter
Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');
Route::get('/dokter/create', [DokterController::class, 'create'])->middleware('auth');
Route::post('/dokter/store', [DokterController::class, 'store'])->middleware('auth');
Route::get('/dokter/show/{id}', [DokterController::class, 'show'])->middleware('auth');
Route::post('/dokter/update/{id}', [DokterController::class, 'update'])->middleware('auth');
Route::get('/dokter/destroy/{id}', [DokterController::class, 'destroy'])->middleware('auth');

// Poli
Route::get('/poli', [PoliController::class, 'index'])->middleware('auth');
Route::get('/poli/create', [PoliController::class, 'create'])->middleware('auth');
Route::post('/poli/store', [PoliController::class, 'store'])->middleware('auth');
Route::get('/poli/show/{id}', [PoliController::class, 'show'])->middleware('auth');
Route::post('/poli/update/{id}', [PoliController::class, 'update'])->middleware('auth');
Route::get('/poli/destroy/{id}', [PoliController::class, 'destroy'])->middleware('auth');

// Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('auth');
Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->middleware('auth');
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->middleware('auth');
Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show'])->middleware('auth');
Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->middleware('auth');
Route::get('/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy'])->middleware('auth');

// Book
Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('/book/destroy/{id}', [BookController::class, 'destroy'])->middleware('auth');
Route::get('/bookantriansekarang', [BookController::class, 'antriansekarang'])->middleware('auth');
Route::get('/bookantrianselesai', [BookController::class, 'antrianselesai'])->middleware('auth');
Route::get('/book/panggil/{id}', [BookController::class, 'panggil'])->middleware('auth');
Route::get('/book/lewati/{id}', [BookController::class, 'lewati'])->middleware('auth');

// Admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/create', [AdminController::class, 'create'])->middleware('auth');
Route::post('/admin/store', [AdminController::class, 'store'])->middleware('auth');
Route::get('/admin/show/{id}', [AdminController::class, 'show'])->middleware('auth');
Route::post('/admin/update/{id}', [AdminController::class, 'update'])->middleware('auth');
Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy'])->middleware('auth');

// Route::get('/login', view('page.login'));

// DashboardAntrean
Route::get('/antrian', [AntrianController::class, 'index']);


// Login
Route::get('/sesi', [SessionController::class, 'index'])->middleware('guest');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('guest');
Route::get('/sesi/logout', [SessionController::class, 'logout'])->middleware('auth');

Route::get('login', function () {
    return redirect('/sesi');
})->name('login');
