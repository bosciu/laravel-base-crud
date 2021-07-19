@extends('layout.main-layout')

@section('asset')
    @parent
    
@endsection

@section('title', '???')

@section('content')
    {{$comic->title}}
    Pagina del fumetto
@endsection