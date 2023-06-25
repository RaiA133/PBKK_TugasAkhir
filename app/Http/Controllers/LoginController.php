<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses autentikasi
        if (auth()->attempt($validatedData)) {
            // Jika autentikasi berhasil, redirect ke halaman lain
            return redirect('/home');
        } else {
            // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }
}
