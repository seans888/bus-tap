@extends('layouts.template-pages')
@section('title') - View News Article @endsection
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
                    <h4 class="title">View News Article</h4>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$announcement->news_title!!}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date and Time Created</label>
                                <input type="text" class="form-control border-input" disabled value="{!!$announcement->created_at!!}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>News Article</label>
                                <p>{!!$announcement->news_article!!}</p>
                            </div>
                        </div>
                    </div>

                    <table>
                        <td width=100>
                            <a href="/bustap/public/news/{{$announcement->id}}/edit" class="btn btn-info btn-block">Edit</a>
                        </td>
                        <td width=25>&nbsp;</td>    
                        <td width=100>
                            {!!Form::open(['action' => ['NewsController@destroy', $announcement->id], 'method' => 'POST'])!!}
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