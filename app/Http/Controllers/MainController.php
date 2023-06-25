<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Menu_category;
use App\Models\users;

class MainController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'menu' => Menu::all(),
            'menu_category' => Menu_category::all()
        ]);
    }
    public function login()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }
    // public function register()
    // {
    //     return view('register', [
    //         'title' => 'Register'
    //     ]);
    // }
    public function tambah_menu()
    {
        return view('tambah_menu', [
            'title' => 'Tambah Menu',
            'menu_category' => Menu_category::all()
        ]);
    }
    public function profil()
    {
        return view('profil', [
            'title' => 'Profil'
        ]);
    }
}
