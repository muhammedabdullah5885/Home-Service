<?php

use Illuminate\Support\Facades\Route;

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
    return view('Pages/index');
});
Route::get('/about', function () {
    return view('Pages/about');
});
Route::get('/contact', function () {
    return view('Pages/contact');
});
Route::get('/services', function () {
    return view('Pages/services');
});
Route::get('/request', function () {
    return view('Pages/request');
});

// auth
Route::get('/login', function () {
    return view('Auth/login');
});
Route::get('/signup', function () {
    return view('Auth/signup');
});

