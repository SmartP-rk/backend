<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Http\Requests\StoreParkRequest;
use App\Http\Requests\UpdateParkRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ParkController extends Controller
{
    protected $park;
    public function __construct(Park $park){
        $this->park = $park;
    }
    public function index()
    {
        $parks = $this->park->with('proprietor')->get();
        if($parks->isEmpty()){
            return response()->json(['error' => 'Não há estacionamentos cadastrados'], 404);
        }
        return response()->json( ['parks' => $parks], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParkRequest $request)
    {
        $park = $this->park->create($request->all());
        return response()->json(['msg' => 'Estacionamento criado com sucesso', 'park' => $park], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $park = $this->park->with('proprietor')->find($id);
        if($park === null){
            return response()->json(['error' => 'Estacionamento não encontrado'], 404);
        }
        return response()->json(['park' => $park], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParkRequest $request, Park $park)
    {
        if($park === null){
            return response()->json(['error' => 'Estacionamento não encontrado'], 404);
        }
        $park->fill($request->all());
        $park->save();
        return response()->json(['msg' => 'Estacionamento atualizado com sucesso', 'park' => $park], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $park = $this->park->find($id);
        if($park === null){
            return response()->json(['error' => 'Estacionamento não encontrado'], 404);
        }
        $park->delete();
        return response()->json(['msg' => 'Estacionamento excluído com sucesso'], 200);
    }
}
