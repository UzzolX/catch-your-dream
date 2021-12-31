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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pricing', 'Pages\PricingController@index')->name('pricing.index');

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');

Route::get('/contact-us', 'Contact\ContactController@index')->name('contact.index');
