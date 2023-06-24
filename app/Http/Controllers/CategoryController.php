<?php

namespace App\Http\Controllers;

use App\Models\Menu_category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function persatujenis(Menu_category $category)
    {
        return view('home_1category', [
            'title' => 'Home',
            'category' => $category,
            'menu' => $category->menu
        ]);
    }
}
