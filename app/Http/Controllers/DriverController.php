<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;

class DriverController extends Controller
{
    protected $driver;
    public function __construct(Driver $driver){
        $this->driver = $driver;
    }
    public function index()
    {
        $drivers = $this->driver->with('vehicles')->get();
        if($drivers->isEmpty()){
            return response()->json(['error' => 'Não há motoristas cadastrados'], 404);
        }
        return response()->json(['drivers' => $drivers], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDriverRequest $request)
    {
        $driver = $this->driver->create($request->all());
        return response()->json(['msg' => 'Motorista criado com sucesso', 'driver' => $driver], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $driver = $this->driver->find($id);
        if($driver === null){
            return response()->json(['error' => 'Motorista não encontrado'], 404);
        }
        return response()->json(['driver' => $driver], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDriverRequest $request, $id)
    {
        $driver = $this->driver->find($id);
        if($driver === null){
            return response()->json(['error' => 'Motorista não encontrado'], 404);
        }
        $driver->fill($request->all());
        $driver->save();
        return response()->json(['msg' => 'Motorista atualizado com sucesso', 'driver' => $driver], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $driver = $this->driver->find($id);
        if($driver === null){
            return response()->json(['error' => 'Motorista não encontrado'], 404);
        }
        $driver->delete();
        return response()->json(['msg' => 'Motorista excluído com sucesso'], 200);
    }
}
