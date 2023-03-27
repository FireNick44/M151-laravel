<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id){
        $event = Event::findOrFail($id);

        return view('event', [
            'event' => $event,
            'id' => $id
        ]);
    }

    public function list()
    {
        $events = Event::all();
        return view('events', [
            'events' => $events
        ]);
    }

    public function events()
    {
        $events = Event::all();
        return view('events', [
            'events' => $events
        ]);
    }

    public function create(){

        $data  = request()->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required'
        ]);

        $event = new Event();
        $event->fill($data);
        $event->save();

        return redirect('/events')->with('event_created', 'Event wurde erfolgreich erstellt!');
    }
}
