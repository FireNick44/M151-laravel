@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Create')

@section('content')
    <h1 class="centered">Event erstellen</h1>

    <form action="?" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Title" class="@error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date">Datum:</label>
            <input type="date" name="date" id="date" placeholder="Datum" class="@error('date') is-invalid @enderror" value="{{ old('date') }}">
            @error('date')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Beschreibung:</label>
            <input type="text" name="description" id="description" placeholder="Beschreibung" class="@error('description') is-invalid @enderror" value="{{ old('description') }}">
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" name="submit" id="submit">Event erstellen</button>
    </form>

@endsection
