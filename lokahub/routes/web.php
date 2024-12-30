<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageUploadController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::resource('products', ProductController::class);

// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\LogoutController;

// Route::get('/register', [RegisterController::class, 'create'])->name('register');
// Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Route::post('/logout', [LogoutController::class])->name('logout');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
//     // Other protected routes...
// });
// Route::middleware(['auth'])->group(function () {
//     Route::resource('tasks', TaskController::class);
// });

// Route::get('/upload', [ImageUploadController::class, 'showForm'])->name('image.form');
// Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');
// Route::get('/images', [ImageUploadController::class, 'listImages'])->name('images.list');

Route::get('/products/print', [ProductController::class, 'printProducts'])->name('products.print');
