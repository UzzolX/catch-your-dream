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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'Pages\WelcomeController@index')->name('welcome.index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pricing', 'Pages\PricingController@index')->name('pricing.index');
// Route::get('/pricing', 'Pages\PricingController@checkout')->name('pricing.index');

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');

Route::get('/contact-us', 'Contact\ContactController@index')->name('contact.index');
Route::post('/contact-us/store', 'Contact\ContactController@store')->name('contact.store');


Route::get('/dashboard/blogs', 'Dashboard\BlogsController@index')->name('blogs.index');
Route::get('/dashboard/blogs/create', 'Dashboard\BlogsController@create')->name('blogs.create');
Route::post('/dashboard/blogs/create', 'Dashboard\BlogsController@store')->name('blogs.store');
Route::get('/dashboard/blogs/{id}', 'Dashboard\BlogsController@show')->name('blogs.show');
Route::get('/dashboard/blogs/{id}/edit', 'Dashboard\BlogsController@edit')->name('blogs.edit');
Route::post('/dashboard/blogs/{id}/update', 'Dashboard\BlogsController@update')->name('blogs.update');
Route::get('/dashboard/blogs/{id}/delete', 'Dashboard\BlogsController@destroy')->name('blogs.delete');

Route::get('/dashboard/gallery', 'Dashboard\GalleryController@index')->name('gallery.index');
Route::get('/dashboard/gallery/create', 'Dashboard\GalleryController@create')->name('gallery.create');
Route::post('/dashboard/gallery/create', 'Dashboard\GalleryController@store')->name('gallery.store');
Route::get('/dashboard/gallery/{id}/edit', 'Dashboard\GalleryController@edit')->name('gallery.edit');
Route::post('/dashboard/gallery/{id}/update', 'Dashboard\GalleryController@update')->name('gallery.update');
Route::get('/dashboard/gallery/{id}/delete', 'Dashboard\GalleryController@destroy')->name('gallery.delete');
