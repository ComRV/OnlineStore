<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', function() {
        return view('container.settings', [
            "title" => "Profil"
        ]);
    });
    
    Route::get('/changepassword', function() {
        return view('container.changepassword', [
            "title" => "Change Password",
        ]);
    });
    
    Route::get('/changepin', function() {
        return view('container.changepin', [
            "title" => "Change PIN",
        ]);
    });
    Route::get('/admin/products', [AdminController::class, 'products']);
    Route::get('/admin/products/add', [AdminController::class, 'addproduct']);
    Route::post('/admin/products/add', [AdminController::class, 'create']);
    Route::get('/admin/products/edit/{product}', [AdminController::class, 'productsedit']);
    Route::patch('/admin/products/edit', [AdminController::class, 'update']);
    Route::post('/comment/{product}', [ProductController::class, 'comment']);
    Route::delete('/admin/products/delete/{name}', [AdminController::class, 'delete']);
    Route::patch('/profile', [RegistrationController::class, 'update']);
    Route::patch('/changepassword', [RegistrationController::class, 'changepassword']);
    Route::patch('/changepin', [RegistrationController::class, 'changepin']);
    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/registration', [RegistrationController::class, 'index']);
    Route::post('/registration', [RegistrationController::class, 'store']);
});

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/detail/{name}', [ProductController::class, 'detail']);
Route::get('/category/{category}', [ProductController::class, 'category']);
Route::get('/club/{club}', [ProductController::class, 'club']);
