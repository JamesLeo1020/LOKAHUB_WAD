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

// Landing, About, and Contact routes
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('about', AdminAboutController::class);
    Route::get('about/print', [AdminAboutController::class, 'print'])->name('about.print');
});

// Product routes
Route::resource('products', ProductController::class);
Route::get('/products/print', [ProductController::class, 'printProducts'])->name('products.print');

// Category routes
Route::get('/categories/create', function () {
    return view('categories.create');
})->name('categories.create');
Route::get('/categories/delete', [CategoryController::class, 'delete'])->name('categories.delete');
Route::resource('categories', CategoryController::class);

// Authentication routes
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LogoutController::class])->name('logout');

// Authenticated task routes
Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::resource('tasks', TaskController::class);
});

// Image upload routes
Route::get('/upload', [ImageUploadController::class, 'showForm'])->name('image.form');
Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');
Route::get('/images', [ImageUploadController::class, 'listImages'])->name('images.list');
