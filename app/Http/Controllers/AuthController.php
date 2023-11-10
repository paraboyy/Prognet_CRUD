<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->intended('/');
        }

        // Login gagal
        return back()->withErrors(['name' => 'Invalid credentials']);
    }
}
