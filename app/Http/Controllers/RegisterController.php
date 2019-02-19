<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegisterController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest');
    }
    

    public function create() 
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|confirmed'
        ]);

        $data = $request->only([
            'email',
            'name',
            'password'
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return redirect(route('teams.index'));
    }

}
