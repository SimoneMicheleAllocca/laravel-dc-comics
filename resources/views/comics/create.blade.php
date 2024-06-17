<!-- resources/views/comics/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-4 mt-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-4 mt-4">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-4 mt-4">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>

            <div class="mb-4 mt-4">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" required>
            </div>

            <div class="mb-4 mt-4">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" required>
            </div>

            <div class="mb-4 mt-4">
                <label for="image" class="form-label">Immagine</label>
                <input type="url" class="form-control" id="image" name="image" required>
            </div>

            <button type="submit" class="btn btn-primary mb-4 mt-4">Crea</button>
        </form>
    </div>
@endsection
