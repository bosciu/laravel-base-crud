@extends('layout.main-layout')

@section('asset')
    @parent
    <link rel="stylesheet" href="{{asset('css/comics_index.css')}}">
@endsection

@section('title', 'Fumetti')

@section('content')
    <div class="container" id="comics-table">
        @if (session('delet_succes'))
          <div class="alert alert-success">
            {{ session('delet_succes') }}
          </div>
        @endif
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
                <td>{{$comic->price}} €</td>
                <td><a class="btn btn-primary" href="{{route('comics.show', $comic->slug)}}" role="button">APRI</a></td>
                <td><a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}" role="button">MODIFICA</a></td>
                <td>
                  <form action="{{route('comics.destroy', $comic)}}" method="post" onsubmit="return confirm('Vuoi cancellare?')">
                    @csrf
                    @method('delete')
                      <button type="submit" class="btn btn-danger">CANCELLA</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{route('comics.create')}}" class="btn btn-primary my-4">Aggiungi fumetto</a>
          {{$comics->links()}}
    </div>
@endsection