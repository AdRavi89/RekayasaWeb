<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MakulController;
use Illuminate\Support\Facades\Route;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('mahasiswa/read', [MahasiswaController::class, 'showAll']);
    Route::get('mahasiswa/read/{id}', [MahasiswaController::class, 'showOne']);
    Route::post('mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::put('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    Route::delete('mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);

    Route::get('dosen/read', [DosenController::class, 'showAll']);
    Route::get('dosen/read/{id}', [DosenController::class, 'showOne']);
    Route::post('dosen/create', [DosenController::class, 'create']);
    Route::put('dosen/update/{id}', [DosenController::class, 'update']);
    Route::delete('dosen/delete/{id}', [DosenController::class, 'delete']);

    Route::get('makul/read', [MakulController::class, 'showAll']);
    Route::get('makul/read/{id}', [MakulController::class, 'showOne']);
    Route::post('makul/create', [MakulController::class, 'create']);
    Route::put('makul/update/{id}', [MakulController::class, 'update']);
    Route::delete('makul/delete/{id}', [MakulController::class, 'delete']);
});