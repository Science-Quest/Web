<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
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

Route::get('/about', [PageController::class, 'about'])->name('about');

// Halaman Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Register Auth Routes
Route::get('/register', [RegisterController::class, 'showForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::get('/auth/google', [GoogleController::class, 'redirect'])->middleware('guest')->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->middleware('guest');

// Logout Route
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('success', 'Berhasil logout!');
})->name('logout')->middleware('auth');