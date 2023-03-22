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
                    <a href="/event/{{$event->id}}">
                        <h2>
                            {{ $event -> title }}
                        </h2>
                    </a>
                    <small>
                        {{ $event -> date }}
                    </small>
                </td>
                <td>
                    <small>
                        {{ $event -> description }}
                    </small>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
