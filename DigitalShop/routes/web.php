<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class,'index']);

Route::get('/home', function () {
    return view('backend.home');
})->middleware('auth')->name('home');

Route::get('/tables', function () {
    return view('backend.tables');
})->name('tables');

Route::get('/charts', function () {
    return view('backend.charts');
})->name('charts');

Route::get('/register_form', function () {
    return view('backend.register_form');
})->name('register_form');

Route::get('/log_in', function () {
    return view('backend.log_in');
})->name('log_in');

Route::get('/password', function () {
    return view('backend.password');
})->name('password');

Route::resource('product', ProductController::class);

Route::get('/products', [ProductController::class,'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
