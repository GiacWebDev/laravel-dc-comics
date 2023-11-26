@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <p class="card-title">ID: {{ $comic->id }}</p>
                <h3 class="card-title">{{ $comic->title }}</h3>
                <h4 class="card-title">{{ $comic->series }}</h4>
                <h4 class="card-title">{{ $comic->type }}</h4>
                <h5 class="card-title">{{ $comic->sale_date }}</h5>
                <h5 class="card-text">{{ $comic->price }}</h5>
                <p>{{ $comic->description }}</p>
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning"><i class="fa-solid fa-pen"
                        style="color: #ffffff;"></i></a>
            </div>
        </div>
    </div>
@endsection
