<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $vehicle;
    public function __construct(Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = $this->vehicle->all();
        return view('vehicles', ['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->vehicle->create($request->all());
        return redirect('/vehicles');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehicle = $this->vehicle->find($id);
        return view('vehicle', ['vehicle' => $vehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicle = $this->vehicle->find($id);
        return view('vehicleUpdate', ['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicle = $this->vehicle->find($id);
        $vehicle->fill($request->all());
        $vehicle->save();
        return redirect('/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle = $this->vehicle->find($id);
        $vehicle->delete();
        return redirect('/vehicles');
    }
}
