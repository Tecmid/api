<?php

use App\Http\Controllers\AnamneseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;

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
    Route::post('register', [DoctorController::class, 'create']);

    Route::middleware('ApiAuth')->group(function () {
        Route::post('auth/refresh', [AuthController::class, 'refresh']);
        
        Route::prefix('doctors')->group(function () {
            Route::get('{doctorId}', [DoctorController::class, 'getById']);            
            Route::put('{doctorId}', [DoctorController::class, 'update']);
            Route::delete('{doctorId}', [DoctorController::class, 'delete']);  // TODO: proteger essa rota para apenas admins da Tecmid poderem acessar
        });

        Route::prefix('appointments')->group(function () {
            Route::post('/', [AppointmentController::class, 'create']);
            Route::get('doctors/{doctorId}', [AppointmentController::class, 'getAppointmentsByDoctorId']);
            Route::get('{appointmentId}', [AppointmentController::class, 'getById']);
            Route::put('{appointmentId}', [AppointmentController::class, 'update']);
            Route::delete('{appointmentId}', [AppointmentController::class, 'delete']);

            Route::prefix('anamnese')->group(function () {
                Route::post('/', [AnamneseController::class, 'createOrUpdate']);
                Route::put('{anamneseId}', [AnamneseController::class, 'update']);
            });
        });
    });

});
