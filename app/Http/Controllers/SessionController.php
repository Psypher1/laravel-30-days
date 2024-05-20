<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth/login');
    }

    public function store()
    {
        // dd(request()->all());

        // validate form
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // attempt loggin
        Auth::attempt($attributes);

        // regenerat session token 
        request()->session()->regenerate();

        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        // dd('logged out');
        Auth::logout();

        return redirect('/');
    }
}
