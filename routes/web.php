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
    return view('clientPage.home');
});
Route::get('/services', function () {
    return view('clientPage.services');
});
Route::get('/about', function () {
    return view('clientPage.about');
});


Route::get('/portfolio', function () {
    return view('clientPage.portfolio');
});

Route::get('/ourteam', function () {
    return view('clientPage.ourteam');
});

Route::get('/price', function () {
    return view('clientPage.price');
});
Route::get('/contact', function () {
    return view('clientPage.contact');
});

Route::get('/admin', function () {
    return view('adminDashboard.index');
});
Route::get('/salon', function () {
    return view('SalonDashboard.index');
});



