@extends('layouts.app')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <p class="card-text">{{ $comic->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Series: <em><b>{{ $comic->series }}</b></em></li>
              <li class="list-group-item">Sale date: <em><b>{{ $comic->sale_date }}</b></em></li>
              <li class="list-group-item">Price: <em><b>{{ $comic->price }}</b></em></li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
@endsection