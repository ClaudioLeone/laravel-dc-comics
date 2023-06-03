@extends('layouts.app')

@section('title')
    EDIT COMIC
@endsection

@section('content')
    <h2 class="text-center py-4">Modifica il <em>DC Comic</em></h2>

    <div class="container">
        <button class="btn btn-danger ms-btn ms-bwd-btn"><a href="{{ route('comics.index') }}"><i class="fa-solid fa-backward btn-icons"></i></a></button>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo: </label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
              </div>
    
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione: </label>
                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Aggiungi una descrizione">{{ $comic->description }}</textarea>
              </div>
    
              <div class="mb-3">
                <label for="thumb" class="form-label">Link all'immagine: </label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
              </div>
    
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo ($): </label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
              </div>
    
              <div class="mb-3">
                <label for="series" class="form-label">Serie: </label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
              </div>
    
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data d'uscita: </label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
              </div>
    
              <div>
                <label for="type" class="form-label">Tipo: </label>
                <select class="form-select" id="type" name="type">
                    <option @selected($comic->type === 'comic book') value="comic book">Comic book</option>
                    <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic novel</option>                  
                </select>
            </div>
            
            <div class="btn-container">
                <button type="submit" class="btn btn-warning ms-modify-btn"><a href="{{ route('comics.index') }}"><i class="fa-solid fa-pencil btn-icons"></i></a></button>
            </div>              
        </form>
    </div>
@endsection