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


// profile
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update-username', [ProfileController::class, 'updateUsername'])->name('profile.update.username');
    Route::post('/profile/update-info', [ProfileController::class, 'updateInfo'])->name('profile.update.info');
    Route::delete('/profile/delete', [ProfileController::class, 'deleteAccount'])->name('profile.delete');
    Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar'])
        ->name('profile.update.avatar');
    Route::get('/profile/personal-data', [ProfileController::class, 'personalData'])->name('profile.personal');
    Route::post('/profile/personal-data/update', [ProfileController::class, 'updatePersonalData'])->name('profile.personal.update');

    // setting password
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::post('/settings/update-password', [UserController::class, 'updatePassword'])->name('settings.updatePassword');
    Route::post('/settings/update-email', [UserController::class, 'updateEmail'])->name('settings.updateEmail');
});
