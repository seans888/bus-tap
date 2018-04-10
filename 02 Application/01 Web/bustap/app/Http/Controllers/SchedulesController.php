<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Route;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();
        $schedules = Schedule::orderBy('sched_date1', 'asc')->paginate(10);
        return view('schedules.index')->with('schedules', $schedules)->with('routes', $routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        return view('schedules.create')->with('routes', $routes);
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
            'sched_date1' => 'required',
            'sched_time1' => 'required',
            'sched_time2' => 'required',
            'route_code' => 'required'
        ]);

        //Add Schedule
        $schedule = new Schedule;
        $schedule->sched_date1 = $request->input('sched_date1');
        $schedule->sched_time1 = $request->input('sched_time1');
        $schedule->sched_time2 = $request->input('sched_time2');
        $schedule->route_code = $request->input('route_code');
        $schedule->save();

        return redirect('/schedules')->with('success', 'Schedule Added');
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
        $schedule = Schedule::find($id);
        return view('schedules.show')->with('schedule', $schedule)->with('routes', $routes);
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
        $schedule = Schedule::find($id);
        return view('schedules.edit')->with('schedule', $schedule)->with('routes', $routes);
    
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
            'sched_date1' => 'required',
            'sched_time1' => 'required',
            'sched_time2' => 'required',
            'route_code' => 'required'
        ]);

        //Edit Schedule
        $schedule = Schedule::find($id);
        $schedule->sched_date1 = $request->input('sched_date1');
        $schedule->sched_time1 = $request->input('sched_time1');
        $schedule->sched_time2 = $request->input('sched_time2');
        $schedule->route_code = $request->input('route_code');
        $schedule->save();

        return redirect('/schedules')->with('success', 'Schedule Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect('/schedules')->with('success', 'Schedule Removed');
    }
}
