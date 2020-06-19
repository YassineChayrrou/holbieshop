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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/prices', function () {
    return view('prices');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin/dashboard', 'admin\Products@showProducts');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });