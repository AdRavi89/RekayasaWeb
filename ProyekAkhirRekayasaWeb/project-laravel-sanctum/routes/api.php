<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
/*
|-------------------------------------------------------------
-------------
| API Routes
|-------------------------------------------------------------
-------------
|
| Here is where you can register API routes for your application.
These
| routes are loaded by the RouteServiceProvider within a group
which
| is assigned the "api" middleware group. Enjoy building your
API!
|
*/
Route::post('/register',
[\App\Http\Controllers\Api\AuthController::class,
'register']);
Route::post('/login',
[\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function
(Request $request) {
 return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
 Route::post('/logout',
[\App\Http\Controllers\Api\AuthController::class, 'logout']);
});
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MakulController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::get('/mahasiswa/read', [MahasiswaController::class, 'read']);
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);

    Route::post('/dosen/create', [DosenController::class, 'create']);
    Route::get('/dosen/read', [DosenController::class, 'read']);
    Route::put('/dosen/update/{id}', [DosenController::class, 'update']);
    Route::delete('/dosen/delete/{id}', [DosenController::class, 'delete']);

    Route::post('/makul/create', [MakulController::class, 'create']);
    Route::get('/makul/read', [MakulController::class, 'read']);
    Route::put('/makul/update/{id}', [MakulController::class, 'update']);
    Route::delete('/makul/delete/{id}', [MakulController::class, 'delete']);
});