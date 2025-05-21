<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('group');
})->name('group');

Route::get('/edit', function () {
    return view('edit');
})->name('editp');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('auth.login');

Route::get('/postklik', function () {
    return view('postklik');
})->name('postk');

Route::get('/publish', function () {
    return view('publish');
})->name('postpublish');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/upgrade', function () {
    return view('upgradepremium');
})->name('pro');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('posts', PostController::class)->middleware('auth');

