@extends('layouts.app')

@section('content')
    <h1>Add Stop</h1>
    {!! Form::open(['action' => 'StopsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('stop_code', 'Code')}}
            {{Form::text('stop_code', '', ['class' => 'form-control', 'placeholder' => 'Code'])}}
        </div>    
        <div class="form-group">
            {{Form::label('stop_name', 'Name')}}
            {{Form::text('stop_name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('stop_location', 'Location')}}
            {{Form::text('stop_location', '', ['class' => 'form-control', 'placeholder' => 'Location'])}}
        </div>
        <div class="form-group">
            {{Form::label('stop_loadbeep', 'Loads beep&trade; card?')}}
            {{Form::text('stop_loadbeep', '', ['class' => 'form-control', 'placeholder' => 'Y/N'])}}
        </div>
        <div class="form-group">
            {{Form::label('stop_sellticket', 'Sells ticket?')}}
            {{Form::text('stop_sellticket', '', ['class' => 'form-control', 'placeholder' => 'Y/N'])}}
        </div>

        <div class="form-group">
            <label for="route_code">Route</label>
            <select class="form-control" name="route_code">
                @if(count($routes) > 0)
                    @foreach($routes as $route)
                        <option value={{$route->id}}> {{$route->id}} - {{$route->route_name}} </option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            {{Form::label('stop_order', 'Order of stop?')}}
            {{Form::text('stop_order', '', ['class' => 'form-control', 'placeholder' => 'Order of stop'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="/stops" class="btn btn-primary">Cancel</a>
    {!! Form::close() !!}
@endsection
