<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brand;
    /**
     * Create a new controller instance.
     */
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $brands = $this->brand->all();
            return response()->json($brands);
        } catch (Exception $exception) {
            info('Exception in index method brand controller: ' . $exception);
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
    public function show(Brand $brand)
    {
        try {
            return response()->json($brand);
        } catch (Exception $exception) {
            info('Exception in show method brand controller: ' . $exception);
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
