@extends('layouts.main')

@section('content')
    <div class="d-block">
        <h1>Crea un nuovo comic</h1>

        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome comic</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="series" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control mb-3 " placeholder="Descrizione" name="description" id="description"
                            style="height: 200px"></textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
