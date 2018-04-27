@extends('layouts.template-pages')
@section('title') - View Bus Routes @endsection
@section('header')  @endsection
@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">View Reservations</h4>
            </div>
            <div class="content">
                    @if(count($reservations) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Date</th>
                            <th>Time</th>
                            <th>Route</th>
                            <th>Passenger Name</th>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{$reservation->res_date}}</td>
                                    <td>{{$reservation->res_time}}</td>
                                    <td>
                                        @if(count($routes) > 0)
                                            @foreach($routes as $route)
                                                @if ($route->id == $reservation->route_code)
                                                    <a href="/routes/{{$reservation->route_code}}">{{$route->route_name}}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{$reservation->user_name}}</td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                @else
                    <p>No reservations found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection