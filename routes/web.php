<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});


Route::get('/products', [ProductController::class, 'showForm'])->name('products.form');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/categories', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/home', [CategoryController::class, 'show'])->name('home');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/products/pdf', [ProductController::class, 'downloadPDF'])->name('products.pdf');
Route::get('/categories/pdf', [CategoryController::class, 'downloadPDF'])->name('categories.pdf');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php
// Route::post('/api/login', 'App\Http\Controllers\UserController@loginSubmit')->name('login.submit');
