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

Route::get('/Officefitout-service', function () {
    return view('Pages/Officefitout-service');
});
Route::get('/Renovation-service', function () {
    return view('Pages/Renovation-service');
});
Route::get('/Electrical-service', function () {
    return view('Pages/Electrical-service');
});
Route::get('/Plumbing-service', function () {
    return view('Pages/Plumbing-service');
});
Route::get('/Painting-service', function () {
    return view('Pages/Painting-service');
});
Route::get('/WaterTankCleaning-service', function () {
    return view('Pages/WaterTankCleaning-service');
});
Route::get('/PoolMaintenance-service', function () {
    return view('Pages/PoolMaintenance-service');
});
Route::get('/Carpentry-service', function () {
    return view('Pages/Carpentry-service');
});
Route::get('/BookNow', function () {
    return view('Pages/BookNow');
});



// auth
Route::get('/login', function () {
    return view('Auth/login');
});
Route::get('/signup', function () {
    return view('Auth/signup');
});

