<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
    Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::get('/callback', [AuthController::class, 'callback'])->name('auth.callback');
});

Route::prefix('user')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/orders', [UserController::class, 'orders'])->name('user.orders');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    Route::get('/notifikasi', [AdminController::class, 'notifikasi'])->name('admin.notifikasi');
    Route::get('/paket', [AdminController::class, 'paket'])->name('admin.paket');
    Route::get('/pesanan', [AdminController::class, 'pesanan'])->name('admin.pesanan');
    Route::get('/pesanan/{id}', [AdminController::class, 'pesananDetail'])->name('admin.pesanan.detail');
    Route::get('/setting', [AdminController::class, 'setting'])->name('admin.setting');
});
