@extends('layout.main-layout')

@section('asset')
    @parent
    <link rel="stylesheet" href="{{asset('css/comics_show.css')}}">
@endsection

@section('title', $comic->title)

@section('content')
    <div class="container d-flex" id='comic'>
        <div class="img-container">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <div id="comic-information">
            <h1>{{$comic->title}}</h1>
            <h4>{{$comic->series}}</h4>
            <p>{{$comic->description}}</p>
            <h3>{{$comic->price}} €</h3>
        </div>
    </div>
@endsection