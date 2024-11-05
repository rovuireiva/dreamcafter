<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Rute halaman utama untuk welcome.vue
Route::get('/', function () {
    return Inertia::render('Welcome'); // Menggunakan app.blade.php
})->name('Welcome');

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