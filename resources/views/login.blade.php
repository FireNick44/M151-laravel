@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Login')

@section('content')
    <h1 class="centered">Login</h1>

    <form action="/login" method="post">
        @csrf

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email address" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" class="@error('password') is-invalid @enderror">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
