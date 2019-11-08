<?php

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
});
Route::get('/o_meni', function () {
    return view('o_meni');
});
Route::get('/proizvodi', function () {
    return view('proizvodi');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
