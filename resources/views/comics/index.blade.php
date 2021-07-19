@extends('layout.main-layout')

@section('asset')
    @parent
    <link rel="stylesheet" href="css/comics_index.css">
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
                <td>APRI</td>
                <td>MODIFICA</td>
                <td>CANCELLA</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection