@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in.
                </div>
            </div>
            <br /><br />

            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Bus Routes</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"></h1>
                            <a href="/routes" class="btn btn-lg btn-block btn-outline-primary">View Routes</a>
                            <a href="/routes/create" class="btn btn-lg btn-block btn-primary">Add Routes</a>
                        </div>
                    </div>

                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Bus Stops</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"></h1>
                            <a href="/stops" class="btn btn-lg btn-block btn-outline-primary">View Stops</a>
                            <a href="/stops/create" class="btn btn-lg btn-block btn-primary">Add Stops</a>
                        </div>
                    </div>

                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Bus Schedules</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"></h1>
                            <a href="/schedules" class="btn btn-lg btn-block btn-outline-primary">View Schedules</a>
                            <a href="/schedules/create" class="btn btn-lg btn-block btn-primary">Add Schedules</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
