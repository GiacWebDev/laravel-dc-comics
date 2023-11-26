@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="card text-center">
            <div class="card-header">
                <h3>Comic</h3>
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            </div>
            <div class="card-body">
                <h1>{{ $comic->title }}</h1>
                <p class="card-text">{{ $comic->description }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
