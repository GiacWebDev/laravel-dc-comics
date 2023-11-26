@extends('layouts.main')

@section('content')
    <div class="d-block">
        <h1>Modifica il comic: {{ $comic->title }}</h1>

        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf

                    {{-- metodo put detto a Laravel --}}
                    @method('PUT')
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome comic</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="series" name="type"
                            value="{{ $comic->type }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3 " placeholder="Descrizione" name="description" id="description" style="height: 200px"
                            value="{{ $comic->description }}"></textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
