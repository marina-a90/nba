<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest')->except('logout');
    }


    public function logout()
    {
        auth()->logout();

        return redirect(route('teams.index'));
    }

    public function create() 
    {
        return view('auth.login');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only(['email', 'password']))) {

            return redirect()->back()->withErrors([
                'message' => 'Wrong login info.'
            ]);

        }

        return redirect(route('teams.index'));
    }

}
