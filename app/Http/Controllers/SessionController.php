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
        dd(request()->all());
    }

    public function destroy()
    {
        // dd('logged out');
        Auth::logout();

        return redirect('/');
    }
}
