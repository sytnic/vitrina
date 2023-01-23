<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
    return view('manage.products_import');
})->middleware('auth');

// ToCollection
Route::post('/productsimport', [App\Http\Controllers\ProductsImportController::class, 'importProducts'])->name('importProducts');

/* to delete this
Route::get('/products/table', function () {
    return view('manage.products_table');
})->middleware('auth');
*/

// https://laravel.demiart.ru/target-class-does-not-exist-in-laravel-8/
// Route::get('/products/table', 'ProductsController@table')->name('tableProducts');
Route::get('/products/table', [ProductsController::class, 'table'])->name('tableProducts');

Route::delete('/products/{product}', 'App\Http\Controllers\ProductsController@destroy')->name('products.destroy');

