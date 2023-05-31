@extends('layouts.app')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="card ms-card">
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
              <button type="button" class="btn btn-primary">
                <a href="{{ $comic->thumb }}" class="card-link">VIEW IMAGE</a>
              </button>
              
              <button type="button" class="btn btn-success">
                <a href="#" class="card-link">PURCHASE</a>
              </button>
            </div>
        </div>
    </div>
@endsection