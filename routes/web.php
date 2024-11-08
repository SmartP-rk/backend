<?php

use App\Http\Controllers\{
    VehicleController,
    DriverController,
    ParkController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicles', [VehicleController::class, 'index']);
Route::get('/vehicle/{id}', [VehicleController::class, 'show']);
Route::post('/vehicle', [VehicleController::class, 'store']);
Route::get('/vehicle', function(){
    return view('vehicleCreate');
});
Route::post('/vehicle/update/{id}', [VehicleController::class, 'update']);
Route::get('/vehicleUpdate/{id}', [VehicleController::class, 'edit']);
Route::get('/vehicle/delete/{id}', [VehicleController::class, 'destroy']);

Route::get('/drivers', [DriverController::class, 'index']);
Route::get('/driver/{id}', [DriverController::class, 'show']);
Route::post('/driver', [DriverController::class, 'store']);
Route::get('/driver', function(){
    return view('driverCreate');
});
Route::post('driver/update/{id}', [DriverController::class, 'update']);
Route::get('driverUpdate/{id}', [DriverController::class, 'edit']);
Route::get('/driver/delete/{id}', [DriverController::class, 'destroy']);

Route::prefix('/park')->group(function(){
    Route::get('/all', [ParkController::class, 'index'])->name('park.all');
    Route::get('/find/{id}', [ParkController::class, 'show'])->name('park.find');
    Route::post('/add', [ParkController::class, 'create'])->name('park.add');
    Route::get('/show', function(){
        return view('parkCreate');
    })->name('park.add.view');
    Route::post('/update/{id}', [ParkController::class, 'update'])->name('park.update');
    Route::get('/update/{id}', [ParkController::class, 'edit'])->name('park.update.view');
    Route::get('/delete/{id}', [ParkController::class, 'destroy'])->name('park.delete');
});

