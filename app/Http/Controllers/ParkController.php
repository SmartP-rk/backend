<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Http\Requests\Park\{StoreParkRequest, UpdateParkRequest};

class ParkController extends Controller
{
    protected $park;
    public function __construct(Park $park)
    {
        $this->park = $park;
    }
    public function index()
    {
        try {
            $parks = $this->park->with('proprietor')->get();
            if ($parks->isEmpty()) {
                return response()->json(['error' => 'Não há estacionamentos cadastrados'], 404);
            }
            return response()->json(['parks' => $parks], 200);
        } catch (\Exception $exception) {
            info('Exception in index method park controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParkRequest $request)
    {
        try {
            $park = $this->park->create($request->validated());
            if ($request->hasFile('image')) {
                $park->image = $request->file('image')->store('images/parks', 'public');
                $park->save();
            }
            return response()->json(['msg' => 'Estacionamento criado com sucesso', 'park' => $park], 201);
        } catch (\Exception $exception) {
            info('Exception in store method park controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Park $park)
    {
        try {
            return response()->json(['park' => $park->load('proprietor')], 200);
        } catch (\Exception $exception) {
            info('Exception in show method park controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParkRequest $request, Park $park)
    {
        try {
            $park->fill($request->validated());
            $park->save();
            return response()->json(['msg' => 'Estacionamento atualizado com sucesso', 'park' => $park->load('proprietor')], 200);
        } catch (\Exception $exception) {
            info('Exception in store update park controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Park $park)
    {
        try {
            $park->delete();
            return response()->json(['msg' => 'Estacionamento excluído com sucesso'], 200);
        } catch (\Exception $exception) {
            info('Exception in delete method park controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }
}
