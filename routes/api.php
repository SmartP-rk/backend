<?php

use App\Http\Controllers\{
    BrandController,
    VehicleModelController,
    ParkController,
    UserController,
    VehicleController,
};
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::get('drivers', [UserController::class, 'driverIndex'])->name('users.driver.index');
    Route::apiResource('parks', ParkController::class);
    Route::apiResource('vehicles', VehicleController::class);
    Route::get('parks/{park}/vehicles', [VehicleController::class, 'indexByPark'])->name('parks.vehicles.index');
    Route::apiResource('brands', BrandController::class)->only(['index', 'show']);
    Route::apiResource('vehicles-models', VehicleModelController::class)->only(['index', 'show']);
    Route::get('brands/{brand}/vehicles-models', [VehicleModelController::class, 'showByBrand'])->name('brands.vehicles.models.show');
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
