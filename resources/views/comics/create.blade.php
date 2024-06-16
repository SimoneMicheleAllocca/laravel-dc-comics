<!-- resources/views/comics/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" rows="3" ></textarea>
        </div>

        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="sale_date">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection