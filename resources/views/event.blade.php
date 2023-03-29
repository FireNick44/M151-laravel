@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Event')

@section('content')

    @if(session()->has('status_update'))
        <div class="flash">
            {{session('status_update')}}
        </div>
    @endif

    <h1 class="centered">Anmeldung</h1>

    <table class="tableWrapper">
        <tr class="tableWrapper">
            <td>
                <h2>
                    {{ $event -> title }}
                </h2>
            </td>
            <td>
                <small>
                    {{ $event -> date }}
                </small>
            </td>
            <td>
                {{ $event -> description }}
            </td>
        </tr>
    </table>

    <form action="?" method="post">
        @csrf

        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstname" id="firstName" placeholder="Enter your first name" class="@error('firstname') is-invalid @enderror" value="{{ old('firstname') }}">
            @error('firstname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastname" id="lastName" placeholder="Enter your last name" class="@error('lastname') is-invalid @enderror" value="{{ old('lastname') }}">
            @error('lastname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email address" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="notes">Notes:</label>
            <input type="text" name="notes" id="notes" placeholder="Enter your notes" class="@error('notes') is-invalid @enderror" value="{{ old('notes') }}">
            @error('notes')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group answer-group">
            <label>Are you coming?</label>
            <input type="radio" value="yes" name="answer" id="yes" class="@error('answer') is-invalid @enderror" @if(old('answer') == 'yes') checked @endif checked>
            <label for="yes">Yes</label>
            <input type="radio" value="no" name="answer" id="no" class="@error('answer') is-invalid @enderror" @if(old('answer') == 'no') checked @endif>
            <label for="no">No</label>
            @error('answer')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="centered">

        <a href="{{$id}}/applications"><br><br>Alle Anmeldungen ansehen</a>
    </div>

@endsection
