@extends('layouts.template-pages')
@section('title') - View Schedule @endsection
@section('header')  @endsection
@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">View Schedule</h4>
            </div>
            <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$schedule->sched_date1!!}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Arrival Time</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$schedule->sched_time1!!}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departure Time</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$schedule->sched_time2!!}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Route</label>
                                @if(count($routes) > 0)
                                    @foreach($routes as $route)
                                        @if ($route->id == $schedule->route_code)
                                            <input type="text" class="form-control border-input" disabled value="{!!$route->route_name!!}">
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <table>
                        <td width=100>
                            <a href="/schedules/{{$schedule->id}}/edit" class="btn btn-info btn-block">Edit</a>
                        </td>
                        <td width=25>&nbsp;</td>    
                        <td width=100>
                            {!!Form::open(['action' => ['SchedulesController@destroy', $schedule->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
                            {!!Form::close()!!} 
                        </td>            
                    </table>

            </div>
        </div>
    </div>      
</div>
@endsection