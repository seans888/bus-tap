@extends('layouts.template-pages')
@section('title') - View BGC Bus News @endsection
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
                <h4 class="title">View BGC Bus News</h4>
            </div>
            <div class="content">
                @if(count($announcements) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Date and Time Created</th>
                            <th>Title</th>
                            <th></th>
                            <th></th>    
                        </thead>
                        <tbody>
                            @foreach($announcements as $announcement)
                                <tr>
                                    <td>{{$announcement->created_at}}</td>
                                    <td><a href="/news/{{$announcement->id}}">{{$announcement->news_title}}</a></td>
                                    <td>
                                        <a href="/news/{{$announcement->id}}/edit" class="btn btn-success">
                                            <i class="ti-pencil-alt2"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['NewsController@destroy', $announcement->id], 'method' => 'POST'])!!}
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
                    <p>No BGC Bus news found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection