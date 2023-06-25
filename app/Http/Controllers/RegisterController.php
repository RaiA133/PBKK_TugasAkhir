<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Buat user baru
        User::create($validatedData);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login.');
    }
}
