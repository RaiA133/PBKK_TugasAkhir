<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu_category;
use App\Models\Menu;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function showTambahMenuForm()
    {
        return view('tambah_menu', [
            'title' => 'Tambah Menu',
            'menu_category' => Menu_category::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|max:255',
            'deskripsi_menu' => 'required',
            'harga' => 'required|max:10',
            'menu_category' => 'required|exists:menu_categories,id',
            'gambar' => 'required|image|max:2048',
        ]);


        // $imagePath = $request->file('gambar')->store('assets/img', 'public');
        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName() . '_' . uniqid() . $file->getClientOriginalExtension();
        $imagePath = $file->storeAs('assets/img', $fileName, 'public');

        $slug = $request->nama_menu;

        Menu::create([
            'nama_menu' => $request->input('nama_menu'),
            'slug' => Str::slug($slug, '-'),
            'deskripsi_menu' => $request->input('deskripsi_menu'),
            'harga' => $request->input('harga'),
            'menu_category_id' => $request->input('menu_category'),
            'gambar' => $imagePath,
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path('assets/img');
            $file->move($destinationPath, $fileName);

            // Gunakan $destinationPath.'/'.$fileName sebagai path file yang disimpan di database
        }

        return redirect('/')->with('success', 'Menu Baru Ditambahkan.');
    }
}
