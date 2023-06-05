@extends('layouts.app')

@section('title')
    Add Comic
@endsection

@section('content')
  <div class="container">
      <h2 class="text-center py-4">Aggiungi un <em>DC Comic</em> alla lista</h2>
      <button class="btn btn-danger ms-btn ms-bwd-btn"><a href="{{ route('comics.index') }}"><i class="fa-solid fa-backward btn-icons"></i></a></button>

      <form action="{{ route('comics.store') }}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo: </label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">

              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione: </label>
              <textarea class="form-control @error('description') is-invalid @enderror" rows="3" id="description" name="description" placeholder="Aggiungi una descrizione"></textarea>

              @error('description')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="thumb" class="form-label">Link all'immagine: </label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">

              @error('thumb')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="price" class="form-label">Prezzo ($): </label>
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">

              @error('price')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="series" class="form-label">Serie: </label>
              <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">

              @error('series')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
  
            <div class="mb-3">
              <label for="sale_date" class="form-label">Data d'uscita: </label>
              <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">

              @error('sale_date')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
  
            <div>
              <label for="type" class="form-label">Tipo: </label>
              <select class="form-select" id="type" name="type">
                  <option selected>Seleziona un tipo</option>
                  <option value="comic book">Comic book</option>
                  <option value="graphic novel">Graphic novel</option>
              </select>
          </div>
          
          <div class="btn-container">
              <button type="submit" class="btn btn-success ms-add-btn"><a href="{{ route('comics.index') }}"><i class="fa-solid fa-plus btn-icons"></i></a></button>
          </div>              
        </form>
  </div>
@endsection
