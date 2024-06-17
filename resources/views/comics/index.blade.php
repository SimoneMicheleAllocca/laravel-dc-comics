@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Comics</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-4">Aggiungi il tuo fumetto</a>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Sale Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td class="d-flex align-items-center">
                            <img src="{{$comic->thumb}}" alt="" class="img-thumbnail me-2" style="width: 50px; height: auto;">
                            {{$comic->title}}
                        </td>
                        <td>{{ $comic->series }}</td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-info btn-sm">Info</a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning btn-sm">Update</a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler cancellare questo fumetto?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




