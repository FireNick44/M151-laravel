@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Events')

@section('content')

    @guest
        <h1 class="centered red">Erstelle einen Account um dich für Events Anzumelden!!!</h1>
    @endguest


    @if(session()->has('event_created'))
        <div class="flash">
            {{session('event_created')}}
        </div>
    @endif


    <h1 class="centered">Alle Events</h1>

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
