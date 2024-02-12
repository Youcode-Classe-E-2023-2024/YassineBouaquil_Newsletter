<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
// routes/web.php

use App\Http\Controllers\UsersController;




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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/manage-users', [ExampleController::class, 'manageUsers']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/admin/users', 'UserController@index')->name('admin.users.index');
Route::get('/some-route', [UserController::class, 'methodName']);

Auth::routes([
    'verify' => true
    ]
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/admin/users', 'Admin\UsersController');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');



