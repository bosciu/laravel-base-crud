@extends('layout.main-layout')


@section('title', "Modifica il fumetto")

@section('content')
    <div class="container py-5">
        <h1>Modifica il fumetto {{$comic->title}}</h1>
        <form action="{{route('comics.update', $comic)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <div class="form-floating">
                    <textarea class="form-control" id="description" style="height: 200px" name="description">{{$comic->description}}</textarea>
                    <label for="description">Inserisci la descrizione</label>
                  </div>
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Thumb immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" value="type">
              </div>
            <button type="submit" class="btn btn-primary">Salva</button>
          </form>
    </div>
@endsection