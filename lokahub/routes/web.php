<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

// About Us Route (for public page)
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Route (for public page)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Admin Routes (without auth middleware, no login needed)
Route::prefix('admin')->name('admin.')->group(function () {
    // Resource routes for About Us management
    Route::resource('about', AdminAboutController::class);
    
    // Route for printing About Us page
    Route::get('about/print', [AdminAboutController::class, 'print'])->name('about.print');
});

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Categories Routes
Route::get('/categories/create', function () {
    return view('categories.create');
})->name('categories.create');
Route::get('/categories/delete', [CategoryController::class, 'delete'])->name('categories.delete');
Route::resource('categories', CategoryController::class);

// Authentication Routes (removed, as no login is required)
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Task Routes (no authentication middleware, accessible without login)
Route::group(['middleware' => 'auth'], function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::resource('tasks', TaskController::class);
});