@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
    <p><strong>Prezzo:</strong> {{ $comic->price }}</p>
@endsection

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
