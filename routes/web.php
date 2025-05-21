<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;


Route::view('/edit', 'edit')->name('editp');
Route::view('/postklik', 'postklik')->name('postk');
Route::view('/publish', 'publish')->name('postpublish');
Route::view('/setting', 'setting')->name('setting');
Route::view('/register', 'auth.register')->name('auth.register');
Route::view('/landing', 'dashboard')->name('dashboard');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// CRUD Post
Route::resource('posts', PostController::class)->middleware('auth');
Route::get('/group', [PostController::class, 'index'])->name('group');

