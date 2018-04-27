@extends('layouts.template-pages')
@section('title') - Add Stop @endsection
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
                <h4 class="title">Add Stop</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => 'StopsController@store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {{Form::label('stop_code', 'Code')}}
                                {{Form::text('stop_code', '', ['class' => 'form-control border-input', 'placeholder' => 'Code'])}}
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{Form::label('stop_name', 'Stop Name')}}
                                {{Form::text('stop_name', '', ['class' => 'form-control border-input', 'placeholder' => 'Stop Name'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('stop_location', 'Location')}}
                                {{Form::text('stop_location', '', ['class' => 'form-control border-input', 'placeholder' => 'Location'])}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                    {{Form::label('stop_loadbeep', 'Loads beep&trade; card?')}}
                                    {{Form::text('stop_loadbeep', '', ['class' => 'form-control border-input', 'placeholder' => 'Y/N'])}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                    {{Form::label('stop_sellticket', 'Sells ticket?')}}
                                    {{Form::text('stop_sellticket', '', ['class' => 'form-control border-input', 'placeholder' => 'Y/N'])}}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-9">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('stop_order', 'Order of stop?')}}
                                {{Form::number('stop_order', '', ['class' => 'form-control border-input', 'placeholder' => 'Order'])}}
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/stops" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection