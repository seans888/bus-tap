@extends('layouts.app')

@section('content')
    <a href="/stops" class="btn btn-primary">Go Back</a>
    <br /><br />
    <h1>{{$stop->stop_name}}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Stop code:</dt>
                <dd>{!!$stop->stop_code!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Name:</dt>
                <dd>{!!$stop->stop_name!!}</dd>
            </dl>
        </li>  
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Location:</dt>
                <dd>{!!$stop->stop_location!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Loads beep&trade; card?</dt>
                <dd>{!!$stop->stop_loadbeep!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
                <dl class="dl-horizontal">
                    <dt>Sells ticket?</dt>
                    <dd>{!!$stop->stop_sellticket!!}</dd>
                </dl>
            </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Route:</dt>
                <dd>{!!$stop->route_code!!}</dd>
            </dl>
        </li>
        <li class="list-group-item">
            <dl class="dl-horizontal">
                <dt>Order of stop:</dt>
                <dd>‎{!!$stop->stop_order!!}</dd>
            </dl>
        </li>                       
    </ul>
    <br/>

    <a href="/stops/{{$stop->id}}/edit" class="btn btn-success">Edit</a>
    <br /><br />

    {!!Form::open(['action' => ['StopsController@destroy', $stop->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
   