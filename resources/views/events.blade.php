@extends('layouts.app')

@section('head')
@endsection

@section('title', 'Events')

@section('content')
    <div class="centered" >
        <h1>Alle Events</h1>
    </div>

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
                <td class="eventApplyLink">
                    <a href="/event/{{$event->id}}">
                        Anmelden
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
