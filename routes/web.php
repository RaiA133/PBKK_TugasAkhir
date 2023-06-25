<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// MainController
Route::get('/', [MainController::class, 'home']);
Route::get('/profil', [MainController::class, 'profil']);
Route::get('/home/{category:slug}', [CategoryController::class, 'persatujenis']);

// RegisterController
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register');

// LoginController
Route::get('/login', [LoginController::class, 'showLoginForm']);

// MenuController
Route::get('/tambah-menu', [MenuController::class, 'showTambahMenuForm']);
Route::post('/tambah-menu/store', [MenuController::class, 'store']);
