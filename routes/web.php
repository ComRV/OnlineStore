<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::get('/settings/profile', function() {
    return view('container.settings', [
        "title" => "Profil"
    ]);
});

Route::get('/settings/changepassword', function() {
    return view('container.changepassword', [
        "title" => "Change Password",
    ]);
});

Route::get('/settings/changepin', function() {
    return view('container.changepin', [
        "title" => "Change PIN",
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/registration', [RegistrationController::class, 'index']);
Route::post('/registration', [RegistrationController::class, 'store']);
