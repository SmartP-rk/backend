<?php

use App\Http\Controllers\{
    ParkController,
    DriverController,
    UserController,
    VehicleController,
};
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('drivers', DriverController::class);
    Route::apiResource('parks', ParkController::class);
    Route::get('park/{park}/drivers', [DriverController::class, 'indexByPark'])->name('park.drivers.index');
    Route::apiResource('vehicles', VehicleController::class);
    Route::get('parks/{park}/vehicles', [VehicleController::class, 'indexByPark'])->name('parks.vehicles.index');
    Route::post('refresh-token', [UserController::class, 'refreshToken'])->name('user.refreshToken');
    Route::post('logout', [UserController::class, 'logout'])->name('user.logout');
    Route::post('destruct-all-tokens', [UserController::class, 'destructAllTokens'])->name('user.destructAllTokens');
});

Route::apiResource('users', UserController::class)->only('store');
Route::post('login', [UserController::class, 'login'])->name('user.login');
Route::post('send-email-password', [SessionController::class, 'sendResetLinkEmail'])->name('session.sendResetLinkEmail');
Route::post('reset-password', [SessionController::class, 'resetPassword'])->name('session.resetPassword');
Route::get('email-verify', [SessionController::class, 'emailVerify'])->name('sessions.emailVerify');
Route::post('email-resend/{user}', [SessionController::class, 'resendEmailVerify'])->name('sessions.resendEmailVerify');
