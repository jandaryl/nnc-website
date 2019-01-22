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
Route::get('/universal-electronic-service-center', function () {
    return view('universal-electronic-service-center');
})->name('universal-electronic-service-center');
Route::get('/products-list', function () {
    return view('products-list');
})->name('products');
Route::get('/everyday-lechon', function () {
    return view('everyday-lechon');
})->name('everyday-lechon');
Route::get('/gelato-de-naction', function () {
    return view('gelato-de-naction');
})->name('gelato-de-naction');
Route::get('/theophilia-flowerets-farm', function () {
    return view('theophilia-flowerets-farm');
})->name('theophilia-flowerets-farm');
Route::get('/universal-electronic-supply', function () {
    return view('universal-electronic-supply');
})->name('universal-electronic-supply');
Route::get('/native-chicken-food-hall', function () {
    return view('native-chicken-food-hall');
})->name('native-chicken-food-hall');
Route::get('/#contact-us', function () {
    return view('contact-us');
})->name('contact-us');
