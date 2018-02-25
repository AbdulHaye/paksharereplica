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
Route::get('home', function () {
    return view('home');
});
Route::get('how-it-works', function () {
    return view('how-it-works');
});
Route::get('buy-shares', function () {
    return view('buy-shares');
});
Route::get('earning-calculator', function () {
    return view('earning-calculator');
});

Route::get('earning-guide', function () {
    return view('earning-guide');
});

Route::get('contact', function () {
    return view('contact');
});