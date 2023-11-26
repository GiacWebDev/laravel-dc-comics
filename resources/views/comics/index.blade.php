@extends('layouts.main')

@section('content')
    <div class="container">

        <h1>Lista Comics</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product->thumb }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <p class="card-title">{{ $product->id }}</p>
                            <h3 class="card-title">{{ $product->title }}</h3>
                            <h4 class="card-title">{{ $product->series }}</h4>
                            <h4 class="card-title">{{ $product->type }}</h4>
                            <h5 class="card-title">{{ $product->sale_date }}</h5>
                            <h5 class="card-text">{{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
