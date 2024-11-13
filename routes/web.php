<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Rute halaman utama untuk welcome.vue
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'Welcome' => Route::has('welcome'),
        'Produk' => Route::has('produk'),
        'Portofolio' => Route::has('portofolio'),
        'Blog' => Route::has('blog'),
        'Tentang' => Route::has('tentang'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Rute untuk halaman Welcome
Route::get('/welcome', function () {
    return Inertia::render('Welcome');
})->name('welcome');

// Rute untuk halaman Produk
Route::get('/produk', function () {
    return Inertia::render('Produk');
})->name('produk');

// Rute untuk halaman Portofolio
Route::get('/portofolio', function () {
    return Inertia::render('Portofolio');
})->name('portofolio');

// Rute untuk halaman Blog
Route::get('/blog', function () {
    return Inertia::render('Blog');
})->name('blog');

// Rute untuk halaman Tentang
Route::get('/tentang', function () {
    return Inertia::render('Tentang');
})->name('tentang');

// Rute halaman login
Route::get('/login', function () {
    return Inertia::render('Auth/Login'); // Akan menggunakan layout.blade.php
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return Inertia::render('Auth/Register'); // Akan menggunakan layout.blade.php
})->name('register')->middleware('guest');

// Rute dashboard yang mengarah ke Dashboard.vue
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard'); // Mengarah ke Dashboard.vue
    })->name('dashboard');
});