<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ApiBookController;
use App\Http\Controllers\Api\ApiPoliController;
use App\Http\Controllers\Api\ApiDokterController;
use App\Http\Controllers\Api\ApiPasienController;
use App\Http\Controllers\Api\ApiPembayaranController;

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
Route::get('/poli', [ApiPoliController::class, 'index']);
Route::post('/poli/add', [ApiPoliController::class, 'store']);
Route::get('/poli/show/{id}', [ApiPoliController::class, 'show']);
Route::put('/poli/update/{id}', [ApiPoliController::class, 'update']);
Route::delete('/poli/delete/{id}', [ApiPoliController::class, 'destroy']);

// Pasien
Route::get('/pasien', [ApiPasienController::class, 'index']);
Route::post('/pasien/add', [ApiPasienController::class, 'store']);
Route::get('/pasien/show/{id}', [ApiPasienController::class, 'show']);
Route::put('/pasien/update/{id}', [ApiPasienController::class, 'update']);
Route::delete('/pasien/delete/{id}', [ApiPasienController::class, 'destroy']);

// Dokter
Route::get('/dokter', [ApiDokterController::class, 'index']);
Route::post('/dokter/add', [ApiDokterController::class, 'store']);
Route::get('/dokter/filter/{kode}', [ApiDokterController::class, 'filter']);
Route::get('/dokter/show/{id}', [ApiDokterController::class, 'show']);
Route::put('/dokter/update/{id}', [ApiDokterController::class, 'update']);
Route::delete('/dokter/delete/{id}', [ApiDokterController::class, 'destroy']);

// Pembayaran
Route::get('/pembayaran', [ApiPembayaranController::class, 'index']);
Route::post('/pembayaran/add', [ApiPembayaranController::class, 'store']);
Route::get('/pembayaran/show/{id}', [ApiPembayaranController::class, 'show']);
Route::put('/pembayaran/update/{id}', [ApiPembayaranController::class, 'update']);
Route::delete('/pembayaran/delete/{id}', [ApiPembayaranController::class, 'destroy']);

// Book
Route::get('/book', [ApiBookController::class, 'index']);
Route::get('/book/detail/{nik}', [ApiBookController::class, 'detail']);
Route::post('/book/add', [ApiBookController::class, 'store']);
Route::get('/book/show/{id}', [ApiBookController::class, 'show']);
Route::put('/book/update/{id}', [ApiBookController::class, 'update']);
Route::delete('/book/delete/{id}', [ApiBookController::class, 'destroy']);
