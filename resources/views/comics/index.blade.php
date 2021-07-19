@extends('layout.main-layout')

@section('asset')
    @parent
    <link rel="stylesheet" href="{{asset('css/comics_index.css')}}">
@endsection

@section('title', 'Fumetti')

@section('content')
    <div class="container" id="comics-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col" colspan='3'>Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
              <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td><a class="btn btn-primary" href="{{route('comics.show', $comic->slug)}}" role="button">APRI</a></td>
                <td><a class="btn btn-warning" href="#" role="button">MODIFICA</a></td>
                <td><a class="btn btn-danger" href="#" role="button">CANCELLA</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$comics->links()}}
    </div>
@endsection