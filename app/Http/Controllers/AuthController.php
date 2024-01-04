<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup()
    {
        return view('pages.auth.signup');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:3|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect()->route('auth.signin')->with('success', 'You have successfully signed up, please sign in!');
    }

    public function signin()
    {
        return view('pages.auth.signin');
    }

    public function authenticate()
    {
        $credentials = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function signout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('auth.signin');
    }
}
