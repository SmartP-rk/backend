<?php

use App\Http\Controllers\
{
    ParkController,
    DriverController,
    UserController,
    VehicleController,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function(){
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
