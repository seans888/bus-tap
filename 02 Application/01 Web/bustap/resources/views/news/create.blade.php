@extends('layouts.template-pages')
@section('title') - Add News @endsection
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
                <h4 class="title">Add News</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('news_title', 'Title')}}
                                {{Form::text('news_title', '', ['class' => 'form-control border-input', 'placeholder' => 'Title'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('news_article', 'News Article')}}
                                {{Form::textarea('news_article', '', ['class' => 'form-control border-input', 'placeholder' => 'News Article'])}}
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/news" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection