<?php

use Illuminate\Support\Facades\Route;

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