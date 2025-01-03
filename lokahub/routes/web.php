<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingReviewController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageUploadController;

// Landing, About, and Contact routes

// Landing Page Route
Route::get('/', function () {
    return view('landing');
})->name('landing');

// About Us Route (for public page)
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Route (for public page)
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
    return view('landing');
})->name('landing');

// Auth Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes (Only accessible for guests)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
});

// User Routes (Protected by 'auth' middleware)
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::resource('profile', ProfileController::class);
    
    // General Pages
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);

    // Cart Routes
    Route::resource('cart', CartController::class);
    
    // Category and Product Routes
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    
    // Checkout Routes
    Route::resource('checkout', CheckoutController::class);

    // Rating and Review Routes
    Route::resource('ratingreview', RatingReviewController::class);
    
    // Voucher Routes for Users
    Route::post('voucher/redeem', [VoucherController::class, 'redeem'])->name('voucher.redeem');

    // Home Route
    Route::get('/home', function () {
        return view('home'); // Ganti dengan halaman home Anda
    })->name('home');
});

// Admin Routes (Protected with 'auth' and 'can:admin' middleware)
Route::middleware(['auth', 'can:admin'])->prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Admin-Only Resource Routes
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('voucher', VoucherController::class);
});

// Catch-all Fallback Route (for undefined routes)
Route::fallback(function () {
    return view('errors.404');
});

// Auth Routes for the rest of the authentication process
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
