<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {

    $comics = config('comics-poster');

    return view('comics', ['comics' => $comics]);
})->name('comics');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');
