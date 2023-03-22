@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Applis')

@section('content')

    <h1>dabeii sind:</h1>

    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
        @endforeach
    </ul>

    <p>Anzahl der Personen die nich dabeii; {{$declinedApplications}}</p>

@endsection
