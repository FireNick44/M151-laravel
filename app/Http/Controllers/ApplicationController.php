<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create($id)
    {
        $request = request();

        $application = new \App\Models\Application();
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->email = $request->get('email');
        $application->answer = $request->get('answer');
        $application->session_id = session()->getId();
        $application->event_id = $id;
        $application->save();

        return redirect('/event/' . $id);
    }
    public function list($id){
        $applications = Application::where('answer', 'yes')->where('event_id', $id)->get();
        $declinedApplications = Application::where('answer', 'no')->where('event_id', $id)->count();

        return view('applications',[
                'eventId' => $id,
                'applications'=> $applications,
                'declinedApplications' => $declinedApplications,
            ]
        );
    }
}
