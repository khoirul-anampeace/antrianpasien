<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PoliController;
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
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

// Pasien
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/create', [PasienController::class, 'create']);


// Dokter
Route::get('/dokter', [DokterController::class, 'index']);
Route::get('/dokter/create', [DokterController::class, 'create']);
Route::post('/dokter/store', [DokterController::class, 'store']);
Route::get('/dokter/show/{id}', [DokterController::class, 'show']);
Route::post('/dokter/update/{id}', [DokterController::class, 'update']);
Route::get('/dokter/destroy/{id}', [DokterController::class, 'destroy']);

// Poli
Route::get('/poli', [PoliController::class, 'index']);
Route::get('/poli/create', [PoliController::class, 'create']);
Route::post('/poli/store', [PoliController::class, 'store']);
Route::get('/poli/show/{id}', [PoliController::class, 'show']);
Route::post('/poli/update/{id}', [PoliController::class, 'update']);
Route::get('/poli/destroy/{id}', [PoliController::class, 'destroy']);

// Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/create', [PembayaranController::class, 'create']);
Route::post('/pembayaran/store', [PembayaranController::class, 'store']);
Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show']);
Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::get('/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy']);

// Book
Route::get('/book', [BookController::class, 'index']);
Route::get('/bookantriansekarang', [BookController::class, 'antriansekarang']);
Route::get('/bookantrianselesai', [BookController::class, 'antrianselesai']);
Route::get('/book/panggil/{id}', [BookController::class, 'panggil']);
Route::get('/book/lewati/{id}', [BookController::class, 'lewati']);

// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/show/{id}', [AdminController::class, 'show']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index']);
// Route::get('/login', view('page.login'));

// DashboardAntrean
Route::get('/antrian', [AntrianController::class, 'index']);
