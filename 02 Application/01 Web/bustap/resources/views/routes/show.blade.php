@extends('layouts.template-pages')
@section('title') - View Route Information @endsection
@section('header')  @endsection
@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
    <div class="row">
        @if ($route->route_map != "no_image.png")
            <div class="col-lg-4 col-md-5">
                <div class="card card-user">
                    <img src='/storage/route_maps/{!!$route->route_map!!}' alt="Route Map" width="325" class="img-rounded img-no-padding img-responsive">
                </div>
            </div>
        @endif
    
        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">View Route Information</h4>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$route->route_code!!}">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Route Name</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$route->route_name!!}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$route->route_availability!!}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Operating Schedule</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$route->route_opschedule!!}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fare</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$route->route_fare!!}">
                            </div>
                        </div>
                    </div>

                    <table>
                        <td width=100>
                            <a href="/routes/{{$route->id}}/edit" class="btn btn-info btn-block">Edit</a>
                        </td>
                        <td width=25>&nbsp;</td>    
                        <td width=100>
                            {!!Form::open(['action' => ['RoutesController@destroy', $route->id], 'method' => 'POST'])!!}
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