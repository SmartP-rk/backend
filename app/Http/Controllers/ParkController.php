<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Http\Requests\StoreParkRequest;
use App\Http\Requests\UpdateParkRequest;

class ParkController extends Controller
{
    protected $park;
    public function __construct(Park $park){
        $this->park = $park;
    }
    public function index()
    {
        $parks = $this->park->all();
        return view('parks', ['parks' => $parks]);
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
    public function store(StoreParkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $park = $this->park->find($id);
        return view('park', ['park' => $park]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Park $park)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParkRequest $request, Park $park)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Park $park)
    {
        //
    }
}
