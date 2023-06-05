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
              <form action="{{ route('comics.show', $comic->id) }}">
                <button style="width: 100%" class="btn btn-primary">
                  <i class="fa-solid fa-eye"></i>
                </button>
              </form>
              
              <form action="{{ route('comics.edit', $comic->id) }}">
                @csrf
                <button style="width: 100%" class="btn btn-warning my-1">
                  <i class="fa-solid fa-pencil"></i>
                </button>
              </form>

              <form style="width: 100%" action="{{ route('comics.destroy', $comic->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button style="width: 100%" class="btn btn-danger" type="submit">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </form>
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