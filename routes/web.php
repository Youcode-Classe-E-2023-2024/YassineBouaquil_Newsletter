<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
// routes/web.php
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


// routes/web.php

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/manage-users', [ExampleController::class, 'manageUsers']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/admin/users', 'UsersController@index')->name('admin.users.index');
Route::get('/some-route', [UserController::class, 'methodName']);

Auth::routes([
    'verify' => true
    ]
);





Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
});

// routes/web.php


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
});
