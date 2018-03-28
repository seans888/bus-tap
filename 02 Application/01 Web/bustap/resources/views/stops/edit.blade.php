@extends('layouts.app')

@section('content')
    <h1>Edit Stop</h1>
    {!! Form::open(['action' => ['StopsController@update', $stop->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('stop_code', 'Code')}}
            {{Form::text('stop_code', $stop->stop_code, ['class' => 'form-control', 'placeholder' => 'Code'])}}
        </div>    
        <div class="form-group">
            {{Form::label('stop_name', 'Name')}}
            {{Form::text('stop_name', $stop->stop_name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('stop_location', 'Location')}}
            {{Form::text('stop_location', $stop->stop_location, ['class' => 'form-control', 'placeholder' => 'Location'])}}
        </div>
        <div class="form-group">
            {{Form::label('stop_loadbeep', 'Loads beep&trade; card?')}}
            {{Form::text('stop_loadbeep', $stop->stop_loadbeep, ['class' => 'form-control', 'placeholder' => 'Y/N'])}}
        </div>
        <div class="form-group">
            {{Form::label('stop_sellticket', 'Sells ticket?')}}
            {{Form::text('stop_sellticket', $stop->stop_sellticket, ['class' => 'form-control', 'placeholder' => 'Y/N'])}}
        </div>

        <div class="form-group">
            {{Form::label('stop_order', 'Order of stop?')}}
            {{Form::text('stop_order', $stop->stop_order, ['class' => 'form-control', 'placeholder' => 'Order of stop'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="/stops" class="btn btn-primary">Cancel</a>
    {!! Form::close() !!}
@endsection
