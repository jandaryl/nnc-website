<?php

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
    return view('home');
})->name('home');
Route::get('/#about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/service-info', function () {
    return view('service-info');
})->name('service-info');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/product-info', function () {
    return view('product-info');
})->name('product-info');
Route::get('/#contact-us', function () {
    return view('contact-us');
})->name('contact-us');
