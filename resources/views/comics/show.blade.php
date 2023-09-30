@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
    <p><strong>Prezzo:</strong> {{ $comic->price }}</p>
    <!-- Aggiungi altri dettagli qui -->
@endsection
