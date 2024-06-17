@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{ $comic->title }}">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description">{{ $comic->description }}</textarea>
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" value="{{ $comic->price }}">
            </div>
            <div>
                <label for="series">Serie</label>
                <input type="text" name="series" id="series" value="{{ $comic->series }}">
            </div>
            <div>
                <label for="sale_date">Data di uscita</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type" value="{{ $comic->type }}">
            </div>
            <button type="submit">Modifica il fumetto</button>
        </form>
    </div>
@endsection