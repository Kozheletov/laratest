<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'                  => 'required|min:5',
            'email'                 => 'required|email',
            'password'              => 'required|min:5|confirmed',
            'password_confirmation' => 'required'
        ]);

        User::create([
            'name'     => $validateData['name'],
            'email'    => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);

        $credentials = $request->only('name', 'password');

        if ( ! auth()->attempt($credentials)) {
            redirect()->route('users.login');
        }

        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('users.login');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('users.login');
    }

    public function authUser(Request $request)
    {
        $validateData = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:5',
        ]);
        if ( ! auth()->attempt($validateData)) {
            return back()->withErrors([
                'password' => 'unsigned email or password',
                'email'    => 'unsigned email or password',
            ]);
        }

        return redirect()->route('dashboard');
    }
}
