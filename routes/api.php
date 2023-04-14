<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('v1')->group(function () {
    Route::post('authenticate', [AuthController::class, 'authenticate']);

    Route::middleware('ApiAuth')->group(function () {
        Route::post('auth/refresh', [AuthController::class, 'refresh']);

        Route::prefix('appointments')->group(function () {
            Route::post('/', [AppointmentController::class, 'create']);
        });
    });

});
