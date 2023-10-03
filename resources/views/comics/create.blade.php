@extends('layouts.app')

@section('content')
    <h1>Crea un Nuovo Fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salva Fumetto</button>
    </form>
@endsection
