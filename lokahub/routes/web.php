<?php
// Cleaned up the excessive blank lines

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('admin')->group(function () {
    Route::resource('about', AdminAboutController::class);
    Route::get('about/print', [AdminAboutController::class, 'print'])->name('admin.about.print');
});


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/categories/create', function () {
    return view('categories.create');
})->name('categories.create');

Route::get('/categories/{category}/delete', [\App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');
Route::resource('categories', \App\Http\Controllers\CategoryController::class);

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::post('/logout', [LogoutController::class])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    // Other protected routes...
});

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
});