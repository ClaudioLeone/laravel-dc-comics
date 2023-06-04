@extends('layouts.app')

@section('title')
    DC-COMICS-HOME
@endsection

@section('content')
    <h1 class="text-center py-4" id="h1">DC COMICS</h1>

    <h3 class="text-center py-2" id="h3"><em>Benvenuto</em></h3>

    <hr>

    <div class="container d-flex justify-content-between my-5">
        <form style="width: 45%" action="{{ route('comics.index') }}">
            <button type="submit" class="btn btn-primary ms-to-signup">Vai alla nostra lista di Comics</button>
        </form>

        <form style="width: 45%" action="{{ route('comics.index') }}">
            <button type="submit" class="btn btn-success ms-to-list-btn">Registrati</button>
        </form>
    </div>
@endsection