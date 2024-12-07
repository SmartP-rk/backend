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

// ->parameters(['fornecedores' =>])
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('users', UserController::class);
    Route::apiResource('drivers', DriverController::class);
    Route::apiResource('parks', ParkController::class);
    Route::apiResource('vehicles', VehicleController::class);
    Route::post('refresh-token', [UserController::class, 'refreshToken']);
    Route::post('logout', [UserController::class, 'logout']);
    Route::post('destruct-all-tokens', [UserController::class, 'destructAllTokens']);
});

Route::apiResource('users', UserController::class)->only('store');
Route::post('login', [UserController::class, 'login'])->name('user.login');
