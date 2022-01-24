<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ItemControllers;

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
Route::get('/', [UserControllers::class, "index"]);

Route::get('/register', [UserControllers::class, "registerIndex"]);
Route::post('/register', [UserControllers::class, "postRegister"])->name("register.post");

Route::get('/login', [UserControllers::class, "loginIndex"]);
Route::post('/login', [UserControllers::class, "postLogin"])->name("login.post");

Route::get('/logout', [UserControllers::class, "logout"]);

Route::get('/products', [ItemControllers::class, "productsIndex"]);
Route::get('/products_cat', [ItemControllers::class, "productsCatIndex"]);

Route::get('/rent_out', [ItemControllers::class, "rentOutIndex"]);
Route::post('/rent_out', [ItemControllers::class, "rentOutForm"])->name('rent.out.item');

Route::post('/book_item/{id}', [ItemControllers::class, "bookItem"]);

Route::get('/cart', [ItemControllers::class, "cartIndex"])->name("cart");

Route::get('/profile', [UserControllers::class, "profileIndex"]);
Route::get('/profile_edit/{id}', [UserControllers::class, 'editProfileIndex'])->name('profile.edit.index');
Route::post('/profile_edit/{id}', [UserControllers::class, 'editProfileForm']);

Route::get('/bookings', [ItemControllers::class, "bookingsIndex"]);

Route::get('/orders', [ItemControllers::class, "ordersIndex"]);

Route::post('/confirm/{id}', [ItemControllers::class, 'confirmBooking']);