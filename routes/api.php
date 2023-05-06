<?php

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
Route::post('/poli/update/{id}', [PoliController::class, 'update']);
Route::delete('/poli/delete/{id}', [PoliController::class, 'destroy']);
