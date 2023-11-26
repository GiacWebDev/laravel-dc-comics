@extends('layouts.main')

@section('content')
    <div class="container">

        <h1>Lista Comics</h1>
        <div class="row">
            @foreach ($products as $comic)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <p class="card-title">ID: {{ $comic->id }}</p>
                            <h3 class="card-title">{{ $comic->title }}</h3>
                            <h4 class="card-title">{{ $comic->series }}</h4>
                            <h4 class="card-title">{{ $comic->type }}</h4>
                            <h5 class="card-title">{{ $comic->sale_date }}</h5>
                            <h5 class="card-text">{{ $comic->price }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success"><i class="fa-solid fa-pen"
                                    style="color: #ffffff;"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
