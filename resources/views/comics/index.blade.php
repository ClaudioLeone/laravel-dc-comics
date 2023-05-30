@extends('layouts.app')

@section('title')
    COMICS LIST
@endsection

@section('content')
    <h2 class="text-center py-3">Lista completa dei nostri <em>DC COMICS</em></h2>

    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td><button>👁</button></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection