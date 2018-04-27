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
                <h4 class="title">View Bus Routes</h4>
            </div>
            <div class="content">
                @if(count($routes) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Route Code</th>
                            <th>Name</th>
                            <th>Route Availability</th>
                            <th>Operating Schedule</th>
                            <th>Bus Fare</th>
                            <th></th>
                            <th></th>    
                        </thead>
                        <tbody>
                            @foreach($routes as $route)
                                <tr>
                                    <td>{{$route->route_code}}</td>
                                    <td><a href="/routes/{{$route->id}}">{{$route->route_name}}</a></td>
                                    <td>{{$route->route_availability}}</td>
                                    <td>{{$route->route_opschedule}}</td>
                                    <td>{{$route->route_fare}}</td>
                                    <td>
                                        <a href="/routes/{{$route->id}}/edit" class="btn btn-success">
                                            <i class="ti-pencil-alt2"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['RoutesController@destroy', $route->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="ti-eraser"></i>
                                            </button>
                                        {!!Form::close()!!} 
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                @else
                    <p>No bus routes found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection