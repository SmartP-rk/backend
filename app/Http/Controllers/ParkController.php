<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\Http\Request;

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
    public function create(Request $request)
    {
        // dd($request->validate($this->park->rules()));
        $this->park->create($request->all());
        return redirect(route('park.all'));
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
    public function show($id)
    {
        $park = $this->park->find($id);
        return view('park', ['park' => $park]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $park = $this->park->find($id);
        return view('parkUpdate', ['park' => $park]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $park = $this->park->find($id);
        $park->update($request->all());
        return redirect(route('park.all'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $park = $this->park->find($id);
        $park->delete();
        return redirect(route('park.all'));
    }
}
