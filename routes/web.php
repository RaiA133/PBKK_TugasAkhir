<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

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

// LoginController
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// RegisterController
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register');


// MainController
Route::get('/', [MainController::class, 'home']);
Route::get('/home', [MainController::class, 'home']);
Route::get('/profil', [MainController::class, 'profil']);

// MenuController
Route::get('/tambah-menu', [MenuController::class, 'showTambahMenuForm']);
Route::post('/tambah-menu/store', [MenuController::class, 'store']);
Route::get('/hapus-menu/{menu:slug}', [MenuController::class, 'destroy']);

//CategoryController
Route::post('/tambah-category', [CategoryController::class, 'store']);
Route::get('/home/{category:slug}', [CategoryController::class, 'persatujenis']);
Route::get('/hapus-category/{category:slug}', [CategoryController::class, 'destroy']);
