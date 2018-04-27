@extends('layouts.template-pages')
@section('title') - Add Bus @endsection
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
                <h4 class="title">Add Bus</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => 'BusesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('bus_platenumber', 'Plate Number')}}
                                {{Form::text('bus_platenumber', '', ['class' => 'form-control border-input', 'placeholder' => 'Plate Number'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('bus_availability', 'Status')}}
                                {{Form::text('bus_availability', '', ['class' => 'form-control border-input', 'placeholder' => 'Status'])}}
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
                        <a href="/buses" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection