@extends('layouts.app')

@section('content')
    <h1>Routes</h1>
    @if(count($routes) > 0)
        @foreach($routes as $route)
            <div class="well">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3><a href="/routes/{{$route->id}}">{{$route->route_name}}</a></h3>
                    </li>
                </ul>
            </div>     
            <br />  
        @endforeach
        <br />
        {{$routes->links()}}    
    @else
        <p>No routes found.</p>
    @endif
@endsection
