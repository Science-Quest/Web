<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/logic-games', function () {
    return view('categories.logic-games');
});


Route::get('/games/penguin-dash', function () {
    return view('logic-games.penguin-dash-detail');
})->name('games.penguin-dash-detail');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Halaman Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Subscribe Page
Route::get('/subscribe', [PageController::class, 'subscribe'])->name('subscribe');


// ===========================
// 🔹 REGISTER ROUTES
// ===========================
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // 🔸 Google OAuth
    Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('auth.google');
    Route::get('/auth/google/callback', [GoogleController::class, 'callback']);
});

// ===========================
// 🔹 LOGIN ROUTES
// ===========================
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

// ===========================
// 🔹 LOGOUT ROUTE
// ===========================
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');