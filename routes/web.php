<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function () {
    $request = request();

    $application = new \App\Models\Application();
    $application->firstname = $request->get('firstname');
    $application->lastname = $request->get('lastname');
    $application->email = $request->get('email');
    $application->answer = $request->get('answer');
    $application->session_id = session()->getId();
    $application->save();

    redirect('form');
});

Route::get('/form/applications', function () {
    $application = \App\Models\Application::all();

    return view('form');
});
