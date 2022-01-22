<?php

use Hamcrest\Type\IsNumeric;
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

/* HOME PAGE ROUTE */
Route::get('/', function () {
    return view('home');
})->name('home');

/* COMICS PAGE ROUTE */
Route::get('/comics', function () {

    $comics = config('comics-poster');

    return view('comics', ['comics' => $comics]);
})->name('comics');

/* CONTACT PAGE ROUTE */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* PRIVACY PAGE ROUTE */
Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

/* ROUTE FOR ID */
Route::get('/comic/{id}', function($id) {

    $comics = config('comics-poster');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
    }
    else {
        abort(404);
    }

    return view('comic', ['comic' => $comic]);

})->name('comic');