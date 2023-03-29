<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'unique:App\Models\User,email',
            'password' => 'required|min:8'
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = \App\Models\User::create($data);
        auth()->login($user);

        return redirect('/')->with('status_update', 'Account wurde erfofgreich erstellt!');
    }

    public function login()
    {
        $data = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            request()->session()->regenerate();

            return redirect()->intended('/')->with('status_update', 'Erfolgreich angemeldet');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('status_update', 'Sie haben sich abgemedet');
    }
}
