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
    return view('container.home', [
        "title" => "Home"
    ]);
});

Route::get('/detail', function() {
    return view('container.detail', [
        "title" => "Detail"
    ]);
});

Route::get('/login', function() {
    return view('container.login', [
        "title" => "Login"
    ]);
});

Route::get('/registration', function() {
    return view('container.registration', [
        "title" => "Registration"
    ]);
});
