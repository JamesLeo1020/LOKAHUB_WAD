<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageUploadController;


// Halaman Home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Halaman Landing
Route::get('/', function () {
    return view('landing');
})->name('landing');

// About Us Route (untuk halaman publik)
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Route (untuk halaman publik)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Admin Routes (untuk panel admin, tanpa middleware autentikasi)
Route::prefix('admin')->name('admin.')->group(function () {
    // Resource routes untuk manajemen About Us
    Route::resource('about', AdminAboutController::class);

    // Route untuk mencetak halaman About Us
    Route::get('about/print', [AdminAboutController::class, 'print'])->name('about.print');
});

// Product Routes
Route::resource('products', ProductController::class);
Route::get('/upload', [ImageUploadController::class, 'showForm'])->name('image.form');
Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');
Route::get('/images', [ImageUploadController::class, 'listImages'])->name('images.list');
Route::get('/products/print', [ProductController::class, 'printProducts'])->name('products.print');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Categories Routes
Route::get('/categories/create', function () {
    return view('categories.create');
})->name('categories.create');
Route::get('/categories/{category}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
Route::resource('categories', CategoryController::class);

// Authentication Routes (registrasi tanpa otentikasi)
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Task Routes (akses dengan autentikasi)
Route::group(['middleware' => 'auth'], function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::resource('tasks', TaskController::class);
});

