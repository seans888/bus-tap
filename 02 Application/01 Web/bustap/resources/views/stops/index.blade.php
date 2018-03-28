@extends('layouts.app')

@section('content')
    <h1>Stops</h1>
    @if(count($stops) > 0)
        @foreach($stops as $stop)
            <div class="well">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3><a href="/stops/{{$stop->id}}">{{$stop->stop_name}}</a></h3>
                    </li>
                </ul>
            </div>     
            <br />  
        @endforeach
        <br />
        {{$stops->links()}}    
    @else
        <p>No stops found.</p>
    @endif
@endsection
