@extends('layouts.template-pages')
@section('title') - Add Route @endsection
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
                <h4 class="title">Add Route</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => 'RoutesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {{Form::label('route_code', 'Route Code')}}
                                {{Form::text('route_code', '', ['class' => 'form-control border-input', 'placeholder' => 'Code'])}}
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{Form::label('route_name', 'Route Name')}}
                                {{Form::text('route_name', '', ['class' => 'form-control border-input', 'placeholder' => 'Route Name'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('route_availability', 'Status')}}
                                {{Form::text('route_availability', '', ['class' => 'form-control border-input', 'placeholder' => 'Status'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                {{Form::label('route_opschedule', 'Operating Schedule')}}
                                {{Form::text('route_opschedule', '', ['class' => 'form-control border-input', 'placeholder' => 'Operating Schedule'])}}                            
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('route_fare', 'Bus Fare')}}
                                {{Form::number('route_fare', '', ['class' => 'form-control border-input', 'placeholder' => 'Fare'])}}                            
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Route Map (max upload size: 2MB) </label> 
                                {{Form::file('route_map')}}
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/bustap/public/routes" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection