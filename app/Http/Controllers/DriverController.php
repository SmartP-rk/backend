<?php

namespace App\Http\Controllers;

use App\Models\Driver;
// use App\Http\Requests\StoreDriverRequest;
// use App\Http\Requests\UpdateDriverRequest;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    protected $driver;
    public function __construct(Driver $driver){
        $this->driver = $driver;
    }
    public function index()
    {
        $drivers = $this->driver->all();
        return view('drivers', ['drivers' => $drivers]);
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
        $this->driver->create($request->all());
        return redirect('/drivers');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $driver = $this->driver->find($id);
        return view('driver', ['driver' => $driver]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $driver = $this->driver->find($id);
        return view('driverUpdate', ['driver' => $driver]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $driver = $this->driver->find($id);
        $driver->fill($request->all());
        $driver->save();
        return redirect('/drivers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $driver = $this->driver->find($id);
        $driver->delete();
        return redirect('/drivers');
    }
}
