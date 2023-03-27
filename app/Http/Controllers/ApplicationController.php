<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

        return redirect('/event/' . $id . '/applications');
    }
    public function list($id){


        //$applications = $event

        $applications = Application::where('answer', 'yes')->where('event_id', $id)->get();
        $declinedApplications = Application::where('answer', 'no')->where('event_id', $id)->count();
        return view('applications',
            [
                'eventId' => $id,
                'applications'=> $applications,
                'declinedApplications' => $declinedApplications,
            ]
        );
    }
}
