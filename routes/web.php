<?php

use App\Http\Controllers\{
    VehicleController,
    DriverController,
    ParkController
};
use App\Models\Driver;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicles', [VehicleController::class, 'index']);
Route::get('/vehicle/{id}', [VehicleController::class, 'show']);
Route::get('/drivers', [DriverController::class, 'index']);
Route::get('/driver/{id}', [DriverController::class, 'show']);
Route::get('/parks', [ParkController::class, 'index']);
Route::get('/park/{id}', [ParkController::class, 'show']);
