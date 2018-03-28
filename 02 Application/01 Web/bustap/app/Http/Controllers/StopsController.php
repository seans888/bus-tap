<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stop;
use App\Route;

class StopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops = Stop::paginate(10);;
        return view('stops.index')->with('stops', $stops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        return view('stops.create')->with('routes', $routes);;
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
            'stop_code' => 'required',
            'stop_name' => 'required',
            'stop_location' => 'nullable',
            'stop_loadbeep' => 'required',
            'stop_sellticket' => 'required',

            'stop_order' => 'required'
        ]);

        //Add Stop
        $stop = new Stop;
        $stop->stop_code = $request->input('stop_code');
        $stop->stop_name = $request->input('stop_name');
        $stop->stop_location = $request->input('stop_location');
        $stop->stop_loadbeep = $request->input('stop_loadbeep');
        $stop->stop_sellticket = $request->input('stop_sellticket');
        $stop->route_code = $request->input('route_code');
        $stop->stop_order = $request->input('stop_order');
        $stop->save();

        return redirect('/stops')->with('success', 'Stop Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stop = Stop::find($id);
        return view('stops.show')->with('stop', $stop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stop = Stop::find($id);
        return view('stops.edit')->with('stop', $stop);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
