<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(\Illuminate\Http\Request $request)
    {
    // Validasi inputan
    $validatedData = $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    // Simpan data pengguna baru ke dalam database
    $user = User::create([
        'nama' => $validatedData['nama'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    // Redirect ke halaman login dengan pesan sukses
    return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login.');
    }

}
