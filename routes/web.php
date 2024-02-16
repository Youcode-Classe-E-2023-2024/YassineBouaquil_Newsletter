<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Editor\MediaController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginRegister;

// Auth Routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Home and Newsletter Routes
Route::get('/', [\App\Http\Controllers\NewsletterController::class, 'index'])->name('index');
Route::post('/subscribe', [\App\Http\Controllers\NewsletterController::class, 'subscribe']);

// Standard Authentication Routes
Auth::routes(['verify' => true]);

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// Example Custom Route
Route::get('/some-route', [UsersController::class, 'methodName']);

// Resourceful Post Routes
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // User Routes
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/update/user/{user}', [AdminController::class, 'updateUser'])->name('users.update');

    // Other Admin Routes
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    // Add more admin routes as needed
});

// Additional Admin Routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('permission', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    // Add more admin routes as needed
});




Route::match(['get', 'post'], '/media', [MediaController::class, 'media'])->name('media');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/generate-pdf', [PdfController::class, 'generatepdf'])->name('generate-pdf');


Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');
