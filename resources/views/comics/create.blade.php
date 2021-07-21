@extends('layout.main-layout')

@section('asset')
    @parent
    <link rel="stylesheet" href="{{asset('css/comics_show.css')}}">
@endsection

@section('title', "Aggiungi fumetto")

@section('content')
    <div class="container py-5">
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <div class="form-floating">
                    <textarea class="form-control" id="description" style="height: 100px" name="description"></textarea>
                    <label for="description">Inserisci la descrizione</label>
                  </div>
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Thumb immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="type" name="type">
              </div>
            <button type="submit" class="btn btn-primary">Salva</button>
          </form>
    </div>
@endsection