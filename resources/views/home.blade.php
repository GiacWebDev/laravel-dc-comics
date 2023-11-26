@extends('layouts.main')

@section('content')
    <div class="d-block">
        <h1>Home</h1>

        <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea un nuovo comic</a>
    </div>
@endsection
