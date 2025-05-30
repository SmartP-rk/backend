<?php

namespace App\Http\Controllers;

use App\Models\VehiclesModel;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    private $vehicleModel;
    /**
     * Create a new controller instance.
     */
    public function __construct(VehiclesModel $vehicleModel)
    {
        $this->vehicleModel = $vehicleModel;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $vehicleModels = $this->vehicleModel->all();
            if ($vehicleModels->isEmpty()) {
                return response()->json(['error' => 'Não há modelos de veículos cadastrados'], 404);
            }
            return response()->json(['data' => $vehicleModels], 200);
        } catch (\Exception $exception) {
            info('Exception in index method vehicle model controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Tente novamente ou contato a equipe de desenvolvimento!'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $vehicleModel)
    {
        try {
            $vehicleModel = $this->vehicleModel->find($vehicleModel);
            if (!$vehicleModel) {
                return response()->json(['error' => 'Modelo de veículo não encontrado'], 404);
            }
            return response()->json(['data' => $vehicleModel], 200);
        } catch (\Exception $exception) {
            info('Exception in show method vehicle model controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Tente novamente ou contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function showByBrand(string $brandId)
    {
        try {
            $vehicleModels = $this->vehicleModel->where('brand_id', $brandId)->get();
            if ($vehicleModels->isEmpty()) {
                return response()->json(['error' => 'Não há modelos de veículos cadastrados para esta marca'], 404);
            }
            return response()->json(['data' => $vehicleModels], 200);
        } catch (\Exception $exception) {
            info('Exception in showByBrand method vehicle model controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Tente novamente ou contato a equipe de desenvolvimento!'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
