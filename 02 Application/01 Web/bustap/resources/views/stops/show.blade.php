@extends('layouts.template-pages')
@section('title') - View Stop Information @endsection
@section('header')  @endsection
@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">View Stop Information</h4>
            </div>
            <div class="content">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$stop->stop_code!!}">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Stop Name</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$stop->stop_name!!}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <p><a href="{!!$stop->stop_location!!}"> Redirect to google map </a></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Loads beep&trade; card?</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$stop->stop_loadbeep!!}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Sells ticket?</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$stop->stop_sellticket!!}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Route</label>
                                @if(count($routes) > 0)
                                    @foreach($routes as $route)
                                        @if ($route->id == $stop->route_code)
                                            <input type="text" class="form-control border-input" disabled value="{!!$route->route_name!!}">
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Order of stop</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$stop->stop_order!!}">
                            </div>
                        </div>
                    </div>

                    <table>
                        <td width=100>
                            <a href="/stops/{{$stop->id}}/edit" class="btn btn-info btn-block">Edit</a>
                        </td>
                        <td width=25>&nbsp;</td>    
                        <td width=100>
                            {!!Form::open(['action' => ['StopsController@destroy', $stop->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
                            {!!Form::close()!!} 
                        </td>            
                    </table>

            </div>
        </div>
    </div>      
</div>
@endsection