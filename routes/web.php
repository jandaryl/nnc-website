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
Route::get('/services-list', function () {
    return view('services-list');
})->name('services');
Route::get('/service-info', function () {
    return view('service-info');
})->name('service-info');
Route::get('/nexus-study-lounge-service', function () {
    return view('nexus-study-lounge-service');
})->name('nexus-study-lounge-service');
Route::get('/on-call-maintenance-and-repair-service', function () {
    return view('on-call-maintenance-and-repair-service');
})->name('on-call-maintenance-and-repair-service');
Route::get('/children-private-hospital', function () {
    return view('children-private-hospital');
})->name('children-private-hospital');
Route::get('/coin-laundry-shop', function () {
    return view('coin-laundry-shop');
})->name('coin-laundry-shop');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/product-info', function () {
    return view('product-info');
})->name('product-info');
Route::get('/#contact-us', function () {
    return view('contact-us');
})->name('contact-us');
