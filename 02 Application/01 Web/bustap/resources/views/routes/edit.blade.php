@extends('layouts.app')

@section('content')
    <h1>Edit Route</h1>
    {!! Form::open(['action' => ['RoutesController@update', $route->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('route_code', 'Code')}}
            {{Form::text('route_code', $route->route_code, ['class' => 'form-control', 'placeholder' => 'Code'])}}
        </div>    
        <div class="form-group">
            {{Form::label('route_name', 'Name')}}
            {{Form::text('route_name', $route->route_name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('route_availability', 'Availability')}}
            {{Form::text('route_availability', $route->route_availability, ['class' => 'form-control', 'placeholder' => 'Availability'])}}
        </div>
        <div class="form-group">
            {{Form::label('route_opschedule', 'Operating Schedule')}}
            {{Form::text('route_opschedule', $route->route_opschedule, ['class' => 'form-control', 'placeholder' => 'Operating Schedule'])}}
        </div>
        <div class="form-group">
            {{Form::label('route_fare', 'Fare')}}
            {{Form::text('route_fare', $route->route_fare, ['class' => 'form-control', 'placeholder' => 'Fare'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
        <a href="/routes" class="btn btn-primary">Cancel</a>
    {!! Form::close() !!}
@endsection
