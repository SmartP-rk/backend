<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\{StoreVehicleRequest, UpdateVehicleRequest};
use App\Models\Park;
use App\Models\Vehicle;
use App\Repository\VehicleRepository;

class VehicleController extends Controller
{
    protected $vehicle;
    protected $vehicleRepository;
    public function __construct(Vehicle $vehicle, VehicleRepository $vehicleRepository){
        $this->vehicle = $vehicle;
        $this->vehicleRepository = $vehicleRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = $this->vehicle->with('drivers')->get();
        if($vehicles->isEmpty()){
            return response()->json(['error' => 'Não há veículos cadastrados'], 404);
        }
        return response()->json(['vehicles' => $vehicles], 200);
    }

    public function indexByPark(Park $park)
    {
        $vehicles = $this->vehicleRepository->FindByParkId($park->id);
        if($vehicles->isEmpty()){
            return response()->json(['error' => 'Não há veículos cadastrados'], 404);
        }
        return response()->json(['vehicles' => $vehicles], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
        $vehicle = $this->vehicle->create($request->all());
        return response()->json(['msg' => 'Veículo criado com sucesso', 'vehicle' => $vehicle], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return response()->json(['vehicle' => $vehicle->load('drivers')], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->fill($request->validated());
        $vehicle->save();
        return response()->json(['msg' => 'Veículo atualizado com sucesso', 'vehicle' => $vehicle], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return response()->json(['msg' => 'Veículo excluído com sucesso'], 200);
    }
}
