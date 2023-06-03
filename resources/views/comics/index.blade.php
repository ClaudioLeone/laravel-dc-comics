@extends('layouts.app')

@section('title')
    COMICS LIST
@endsection

@section('content')
    <h2 class="text-center py-4 cursor-pointer">Lista completa dei nostri <em>DC COMICS</em></h2>

    <div class="container">
        <table class="table table-dark table-striped cursor-pointer table-fixed">
            <thead>
              <tr>
                <th>Cover</th>
                <th>Titolo</th>
                <th>Serie</th>
                <th>Azioni</th>
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
                    <td>
                      <button class="btn btn-primary"><a href="{{ route('comics.show', $comic->id) }}"><i class="fa-solid fa-eye"></i></a></button>
                      <button class="btn btn-warning"><a href="{{ route('comics.edit', $comic->id) }}"><i class="fa-solid fa-pencil"></i></a></button>  
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>

        <div class="create-page-btn">
          <button class="btn"><a href="{{ route('comics.create') }}">Aggiungi un DC Comic</a></button>
        </div>
    </div>
@endsection