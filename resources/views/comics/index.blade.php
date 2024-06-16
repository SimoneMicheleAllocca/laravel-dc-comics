<!-- resources/views/comics/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Comics</h1>
    <a href="{{ route('comics.create') }}" class="btn btn-primary mb-4">Create New Comic</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Series</th>
                <th>Price</th>
                <th>Type</th>
                <th>Sale Date</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
               
                    <td class="d-flex">
                        <img src="{{$comic->image}}" alt="" class="w-25 me-2">

                        {{$comic->title}}
                    </td>
                    
                    <td>{{ $comic->series }}</td>
                    <td>${{ $comic->price }}</td>
                    <td>{{$comic->type    }}</td>
                    <td>{{$comic->sale_date }}</td>
                    <td>
                        <a href="{{ route('comics.show', ['comic'=>$comic->id]) }}" class="btn btn-info btn-sm">Info</a>
                    </td>
                    <td>{{$comic->description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection