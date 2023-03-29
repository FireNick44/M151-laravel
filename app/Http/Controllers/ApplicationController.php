<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create($id)
    {

        $data = request()->validate([
            'firstname' => ['required','max:200','min:3'],
            'lastname'=> ['required','max:200','min:3'],
            'email'=> ['required','email'],
            'answer'=> ['required','max:200'],
        ]);

        $application = new \App\Models\Application();
        $application->fill($data);
        $application->session_id = session()->getId();
        $application->event_id = $id;
        $application->save();

        return redirect('/event/' . $id)->with('status_update', 'Sie haben sich für das Event angemeldet');
    }
    public function list($id){


        $applications = Event::findorfail($id)->application->where('answer', 'yes');
        $declinedApplications = Event::findorfail($id)->application->where('answer', 'no')->count();

        return view('applications',
            [
                'eventId' => $id,
                'applications'=> $applications,
                'declinedApplications' => $declinedApplications,
            ]
        );
    }
}
