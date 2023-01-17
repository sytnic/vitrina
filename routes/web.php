<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Export works.
// Route::get('users/export/', [App\Http\Controllers\UsersController::class, 'export']);

// Import works. Excel file must be in /public in default.
//Route::get('users/import/', [App\Http\Controllers\UsersController::class, 'import']);

// ToModel
Route::post('users/import/', [App\Http\Controllers\UsersController::class, 'importUsers'])->name('importUsers');
// ToCollection
Route::post('users/importcollect/', [App\Http\Controllers\UsersController::class, 'importUsersCollect'])->name('importUsersCollect');

Route::get('/techadmin', function () {
    return view('techadmin');
})->middleware('auth');

Route::get('/usersimport', function () {
    return view('usersimport');
})->middleware('auth');

Route::get('/products/import', function () {
    return view('admin.products_import');
})->middleware('auth');
