@extends('layouts.app')

@section('title')
    COMICS LIST
@endsection

@section('content')
    <h2 class="text-center py-4 cursor-pointer">Lista completa dei nostri <em>DC COMICS</em></h2>

    <div class="container">
        <table class="table table-dark table-striped cursor-pointer">
            <thead>
              <tr>
                <th scope="col">Cover</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
                <tr>
                    <th scope="row">
                      <img class="thumbs" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td><button class="btn btn-primary"><a href="{{ route('comics.show', $comic->id) }}">👁</a></button></td>
                </tr>
              @endforeach
            </tbody>
        </table>

        <div class="create-page-btn">
          <button class="btn"><a href="{{ route('comics.create') }}">Aggiungi un DC Comic</a></button>
        </div>
    </div>
@endsection