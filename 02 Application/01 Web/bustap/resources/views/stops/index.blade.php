@extends('layouts.template-pages')
@section('title') - View Bus Stops @endsection
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
                <h4 class="title">View Bus Stops</h4>
            </div>
            <div class="content">
                    @if(count($stops) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Stop Code</th>
                            <th>Name</th>
                            <th>beep&trade;?</th>
                            <th>Ticket?</th>
                            <th>Route</th>
                            <th></th>
                            <th></th>    
                        </thead>
                        <tbody>
                            @foreach($stops as $stop)
                                <tr>
                                    <td>{{$stop->stop_code}}</td>
                                    <td><a href="/stops/{{$stop->id}}">{{$stop->stop_name}}</a></td>
                                    <td>
                                        @if ($stop->stop_loadbeep == 'Y')
                                            <i class="ti-check"></i>
                                        @endif
                                        @if ($stop->stop_loadbeep == 'N')
                                            <i class="ti-close"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($stop->stop_sellticket == 'Y')
                                            <i class="ti-check"></i>
                                        @endif
                                        @if ($stop->stop_sellticket == 'N')
                                            <i class="ti-close"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if(count($routes) > 0)
                                            @foreach($routes as $route)
                                                @if ($route->id == $stop->route_code)
                                                <a href="/routes/{{$stop->route_code}}">{{$route->route_name}}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/stops/{{$stop->id}}/edit" class="btn btn-success">
                                            <i class="ti-pencil-alt2"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['StopsController@destroy', $stop->id], 'method' => 'POST'])!!}
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
                    <p>No bus stops found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection