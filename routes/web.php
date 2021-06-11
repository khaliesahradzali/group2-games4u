<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CartController;
use  App\Http\Controllers\AuthController;

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

Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])
    ->name('shop');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])
    ->name('cart.index');

Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])
    ->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])
    ->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])
    ->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])
    ->name('cart.clear');

Route::get('/', [App\Http\Controllers\AuthController::class, 'auth'])
    ->name('auth.index');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])
    ->name('auth.register');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

