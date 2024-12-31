<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Tidak ada pemanggilan middleware

    public function showLoginForm()
    {
        // Logic untuk menampilkan halaman login
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Logic untuk login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect setelah login sukses
            return redirect()->intended('/');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
