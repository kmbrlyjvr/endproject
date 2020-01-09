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

/*Route::get('vue/custom', function() {
    return view('vue.custom');
})->name('vue.custom');*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact.index');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/items', 'ItemsController@index')->name('items.index');
Route::get('/404', 'HomeController@notfound')->name('404');
Route::get('/receipt', 'OrderController@receipt')->name('order.receipt');


Route::get('/login', 'AuthController@login')->name('auth.login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->name('auth.logout')->middleware('auth');
Route::get('/signup', 'AuthController@signup')->name('auth.signup')->middleware('guest');
Route::post('/signup', 'AuthController@postSignup')->name('auth.postSignup')->middleware('guest');
Route::get('/profile/{id}', 'AuthController@profile')->name('auth.profile');


Route::get('/customize/{item}', 'ItemsController@customize')->name('customize');
Route::get('/{item}', 'ItemsController@show')->name('show');
Route::get('/svg/{file}.svg', 'SvgController@render')->name('svg.render');

Route::get('/create', 'BlogController@create')->name('create');
Route::post('/store', 'BlogController@store')->name('store');
Route::get('/{id}', 'BlogController@show')->name('show');
Route::get('/{id}/edit', 'BlogController@edit')->name('edit');
Route::put('/{id}', 'BlogController@update')->name('update');
Route::delete('/{id}', 'BlogController@destroy')->name('destroy');

Route::post('customize/orderTrouser', 'OrderController@orderTrouser')->name('orderTrouser');
Route::get('/order/render/{order}.svg', 'OrderController@render')->name('order.render');
Route::get('/order/{id}', 'OrderController@show')->name('order.show');



/*Route::get('/{id}/edit', 'OrderController@edit')->name('edit');
Route::put('/{id}', 'OrderController@update')->name('update');
Route::delete('/{id}', 'OrderController@destroy')->name('destroy');*/

Route::get('/imageUpload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('/imageUpload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

