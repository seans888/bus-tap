@extends('layouts.template-pages')
@section('title') - Add Schedule @endsection
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
                <h4 class="title">Add Schedule</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => 'SchedulesController@store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('sched_date1', 'Date')}}
                                {{Form::date('sched_date1', '', ['class' => 'form-control border-input', 'placeholder' => 'Date'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('sched_time1', 'Arrival Time')}}
                                {{Form::time('sched_time1', '', ['class' => 'form-control border-input', 'placeholder' => 'Arrival Time'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('sched_time2', 'Departure Time')}}
                                {{Form::time('sched_time2', '', ['class' => 'form-control border-input', 'placeholder' => 'Departure Time'])}}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="route_code">Route</label>
                                <select class="form-control border-input" name="route_code">
                                    @if(count($routes) > 0)
                                        @foreach($routes as $route)
                                            <option value={{$route->id}}> {{$route->route_name}} </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/bustap/public/schedules" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection