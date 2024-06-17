@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Modifica il fumetto</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="5" required>{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{ $comic->price }}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}" required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifica il fumetto</button>
        </form>
    </div>
@endsection
