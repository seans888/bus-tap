<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\Route;

class BusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();
        $buses = Bus::orderBy('route_code', 'asc')->paginate(10);
        return view('buses.index')->with('buses', $buses)->with('routes', $routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        return view('buses.create')->with('routes', $routes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bus_platenumber' => 'required',
            'bus_availability' => 'required',
            'route_code' => 'required',
        ]);

        //Add Bus
        $bus = new Bus;
        $bus->bus_platenumber = $request->input('bus_platenumber');
        $bus->bus_availability = $request->input('bus_availability');
        $bus->route_code = $request->input('route_code');
        $bus->save();

        return redirect('/buses')->with('success', 'Bus Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $routes = Route::all();
        $bus = Bus::find($id);
        return view('buses.show')->with('bus', $bus)->with('routes', $routes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routes = Route::all();
        $bus = Bus::find($id);
        return view('buses.edit')->with('bus', $bus)->with('routes', $routes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bus_platenumber' => 'required',
            'bus_availability' => 'required',
            'route_code' => 'required',
        ]);

        //Edit Bus
        $bus = Bus::find($id);
        $bus->bus_platenumber = $request->input('bus_platenumber');
        $bus->bus_availability = $request->input('bus_availability');
        $bus->route_code = $request->input('route_code');
        $bus->save();

        return redirect('/buses')->with('success', 'Bus Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::find($id);
        $bus->delete();
        return redirect('/buses')->with('success', 'Bus Removed');
    }
}
