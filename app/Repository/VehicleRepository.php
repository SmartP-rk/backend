<?php

namespace App\Repository;

use App\Models\Vehicle;

class VehicleRepository {
    protected $vehicle;

    public function __construct(Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }
    public function FindByParkId($parkId){
        $vehicles = $this->vehicle->with('driver')
            ->whereHas(
                'driver.park',
                function($query) use ($parkId){
                    $query->where('id', '=', $parkId);
                }
            )->get();
        return $vehicles;
    }
}
