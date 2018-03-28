<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::paginate(10);
        return view('routes.index')->with('routes', $routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('routes.create');
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
            'route_code' => 'required',
            'route_name' => 'required',
            'route_availability' => 'required',
            'route_opschedule' => 'required',
            'route_fare' => 'required'
        ]);

        //Add Route
        $route = new Route;
        $route->route_code = $request->input('route_code');
        $route->route_name = $request->input('route_name');
        $route->route_availability = $request->input('route_availability');
        $route->route_opschedule = $request->input('route_opschedule');
        $route->route_fare = $request->input('route_fare');
        $route->save();

        return redirect('/routes')->with('success', 'Route Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = Route::find($id);
        return view('routes.show')->with('route', $route);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route = Route::find($id);
        
        return view('routes.edit')->with('route', $route);
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
            'route_code' => 'required',
            'route_name' => 'required',
            'route_availability' => 'required',
            'route_opschedule' => 'required',
            'route_fare' => 'required'
        ]);

        //Edit Route
        $route = Route::find($id);
        $route->route_code = $request->input('route_code');
        $route->route_name = $request->input('route_name');
        $route->route_availability = $request->input('route_availability');
        $route->route_opschedule = $request->input('route_opschedule');
        $route->route_fare = $request->input('route_fare');
        $route->save();

        return redirect('/routes')->with('success', 'Route Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::find($id);
        $route->delete();
        return redirect('/routes')->with('success', 'Route Removed');
    }
}
