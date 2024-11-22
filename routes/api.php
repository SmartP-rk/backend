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
Route::apiResource('users', UserController::class);
Route::apiResource('drivers', DriverController::class);
Route::apiResource('parks', ParkController::class);
Route::apiResource('vehicles', VehicleController::class);

Route::post('login', [UserController::class, 'login']);
