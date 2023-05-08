<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\DokterController;
use App\Http\Controllers\Api\PasienController;
use App\Http\Controllers\Api\PembayaranController;
use App\Http\Controllers\Api\PoliController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// add routes api resource
Route::apiResource('/post', PostController::class);


// Poli
Route::get('/poli', [PoliController::class, 'index']);
Route::post('/poli', [PoliController::class, 'store']);
Route::get('/poli/show/{id}', [PoliController::class, 'show']);
Route::put('/poli/update/{id}', [PoliController::class, 'update']);
Route::delete('/poli/delete/{id}', [PoliController::class, 'destroy']);

// Pasien
Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien', [PasienController::class, 'store']);
Route::get('/pasien/show/{id}', [PasienController::class, 'show']);
Route::put('/pasien/update/{id}', [PasienController::class, 'update']);
Route::delete('/pasien/delete/{id}', [PasienController::class, 'destroy']);

// Dokter
Route::get('/dokter', [DokterController::class, 'index']);
Route::post('/dokter', [DokterController::class, 'store']);
Route::get('/dokter/show/{id}', [DokterController::class, 'show']);
Route::put('/dokter/update/{id}', [DokterController::class, 'update']);
Route::delete('/dokter/delete/{id}', [DokterController::class, 'destroy']);

// Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::post('/pembayaran', [PembayaranController::class, 'store']);
Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show']);
Route::put('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::delete('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy']);

// Book
Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/book/show/{id}', [BookController::class, 'show']);
Route::put('/book/update/{id}', [BookController::class, 'update']);
Route::delete('/book/delete/{id}', [BookController::class, 'destroy']);
