@extends('layouts.template-pages')
@section('title') - Home @endsection
@section('header')  @endsection
@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-sm-14">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-announcement"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/news'>
                                <p>View</p>    
                                BGC Bus News
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-lg-4 col-sm-7">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-map"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/routes'>
                                <p>View</p>    
                                Bus Routes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-sm-7">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-map-alt"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/stops'>
                                <p>View</p>    
                                Bus Stops
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-sm-7">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-car"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/buses'>
                                <p>View</p>    
                                Buses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-lg-4 col-sm-7">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-time"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/schedules'>
                                <p>View</p>    
                                Schedules
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-sm-7">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-ticket"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/reservations'>
                                <p>View</p>    
                                Reservations
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-lg-4 col-sm-7">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-comment"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <a href='/bustap/public/feedback'>
                                <p>View</p>    
                                Feedbacks
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection