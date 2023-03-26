@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Events')

@section('content')
    <h1 class="centered">Alle Events</h1>

    @guest
        <h1 class="centered">Erstelle einen Account um dich für Events Anzumelden</h1>
    @endguest

    <table class="tableWrapper">
        @foreach($events as $event)
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
                @auth
                <td class="eventApplyLink">
                    <a href="/event/{{$event->id}}">
                        Anmelden
                    </a>
                </td>
                @endauth
            </tr>
        @endforeach
    </table>

@endsection
