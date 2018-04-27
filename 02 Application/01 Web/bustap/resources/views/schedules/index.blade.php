@extends('layouts.template-pages')
@section('title') - View Schedules @endsection
@section('header')  @endsection
@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">View Schedules</h4>
            </div>
            <div class="content">
                    @if(count($schedules) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Date</th>
                            <th>Arrival Time</th>
                            <th>Departure Time</th>
                            <th>Route</th>
                            <th></th>
                            <th></th>    
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td><a href="/schedules/{{$schedule->id}}">{{$schedule->sched_date1}}</a></td>
                                    <td>{{$schedule->sched_time1}}</td>
                                    <td>{{$schedule->sched_time2}}</td>
                                    <td>
                                        @if(count($routes) > 0)
                                            @foreach($routes as $route)
                                                @if ($route->id == $schedule->route_code)
                                                <a href="/routes/{{$schedule->route_code}}">{{$route->route_name}}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/schedules/{{$schedule->id}}/edit" class="btn btn-success">
                                            <i class="ti-pencil-alt2"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['SchedulesController@destroy', $schedule->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="ti-eraser"></i>
                                            </button>
                                        {!!Form::close()!!} 
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                @else
                    <p>No schedules found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection