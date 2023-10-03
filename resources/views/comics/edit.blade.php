@extends('layouts.app')

@section('content')
    <h1>Modifica Fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" name="title" class="form-control" value="{{ $comic->title }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna Fumetto</button>
    </form>
@endsection
