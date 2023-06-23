<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }
    public function login()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }
    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }
    public function tambah_menu()
    {
        return view('tambah_menu', [
            'title' => 'Tambah Menu'
        ]);
    }
    public function profil()
    {
        return view('profil', [
            'title' => 'Profil'
        ]);
    }
}
