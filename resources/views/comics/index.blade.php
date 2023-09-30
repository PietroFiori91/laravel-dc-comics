@extends('layouts.app')

@section('content')
    <h1>Elenco dei Fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
@endsection
