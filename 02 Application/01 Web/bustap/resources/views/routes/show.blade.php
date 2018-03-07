@extends('layouts.app')

@section('content')
    <a href="/routes" class="btn btn-primary">Go Back</a>
    <br /><br />
    <h1>{{$route->route_name}}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Route code:</dt>
                <dd>{!!$route->route_code!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Name:</dt>
                <dd>{!!$route->route_name!!}</dd>
            </dl>
        </li>  
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Status:</dt>
                <dd>{!!$route->route_availability!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Operating schedule:</dt>
                <dd>{!!$route->route_opschedule!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Bus fare:</dt>
                <dd>‎₱{!!$route->route_fare!!}</dd>
            </dl>
        </li>                       
    </ul>
    <br/>

    <a href="/routes/{{$route->id}}/edit" class="btn btn-success">Edit</a>
    <br /><br />

    {!!Form::open(['action' => ['RoutesController@destroy', $route->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
   