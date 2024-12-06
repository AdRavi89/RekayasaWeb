<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MakulController;
use Illuminate\Http\Request;
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

// Authentication Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes (Require Authentication)
Route::middleware('auth:sanctum')->group(function () {
    // User-related Routes
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    // Mahasiswa CRUD Routes
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/read', [MahasiswaController::class, 'showAll']);
        Route::get('/read/{id}', [MahasiswaController::class, 'showOne']);
        Route::post('/create', [MahasiswaController::class, 'create']);
        Route::put('/update/{id}', [MahasiswaController::class, 'update']);
        Route::delete('/delete/{id}', [MahasiswaController::class, 'delete']);
    });

    // Dosen CRUD Routes
    Route::prefix('dosen')->group(function () {
        Route::get('/read', [DosenController::class, 'showAll']);
        Route::get('/read/{id}', [DosenController::class, 'showOne']);
        Route::post('/create', [DosenController::class, 'create']);
        Route::put('/update/{id}', [DosenController::class, 'update']);
        Route::delete('/delete/{id}', [DosenController::class, 'delete']);
    });

    // Makul CRUD Routes
    Route::prefix('makul')->group(function () {
        Route::get('/read', [MakulController::class, 'showAll']);
        Route::get('/read/{id}', [MakulController::class, 'showOne']);
        Route::post('/create', [MakulController::class, 'create']);
        Route::put('/update/{id}', [MakulController::class, 'update']);
        Route::delete('/delete/{id}', [MakulController::class, 'delete']);
    });
});
