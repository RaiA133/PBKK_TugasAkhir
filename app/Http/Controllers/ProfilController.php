<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function showProfileForm()
    {
        return view('profil', [
            'title' => 'Profil'
        ]);
    }
    public function profil(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        $user->fill($request->only([
            'nama', 'email',
        ]));
        $user->save();
        return redirect('home')->with('success', 'Profile Anda Sudah Di Perbaharui');
    }
}
