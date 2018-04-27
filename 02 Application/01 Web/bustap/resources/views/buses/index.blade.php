@extends('layouts.template-pages')
@section('title') - View Buses @endsection
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
                <h4 class="title">View Buses</h4>
            </div>
            <div class="content">
                    @if(count($buses) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Plate Number</th>
                            <th>Status</th>
                            <th>Route</th>
                            <th></th>
                            <th></th>    
                        </thead>
                        <tbody>
                            @foreach($buses as $bus)
                                <tr>
                                    <td><a href="/buses/{{$bus->id}}">{{$bus->bus_platenumber}}</td>
                                    <td>{{$bus->bus_availability}}</td>
                                    <td>
                                        @if(count($routes) > 0)
                                            @foreach($routes as $route)
                                                @if ($route->id == $bus->route_code)
                                                <a href="/routes/{{$bus->route_code}}">{{$route->route_name}}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/buses/{{$bus->id}}/edit" class="btn btn-success">
                                            <i class="ti-pencil-alt2"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['BusesController@destroy', $bus->id], 'method' => 'POST'])!!}
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
                    <p>No buses found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection