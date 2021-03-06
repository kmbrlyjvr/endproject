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


Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function() {
    return view('about');
});

Route::get('/help', function() {
    return view('help');
});

Route::get('/terms', function() {
    return view('terms');
});

Route::get('/faqs', function() {
    return view('faqs');
});

Route::get('/generator', function() {
    return view('generator');
});

Route::get('/shippings', function() {
    return  App\Models\ShippingCost::all();
});

Route::middleware('auth')->middleware('admin')->name('admin.')->prefix('admin')->group(function() {


    Route::get('/', 'AdminController@index')->name('index');

    Route::get('/users', 'AdminUserController@index')->name('user.index');
    Route::get('/user/{user}/edit', 'AdminUserController@edit')->name('user.edit');
    Route::put('/user/{user}', 'AdminUserController@update')->name('user.update');

    Route::get('/orders', 'AdminOrdersController@index')->name('order.index');
    Route::get('/order/{order}/edit', 'AdminOrdersController@edit')->name('order.edit');
    Route::put('/order/{order}', 'AdminOrdersController@update')->name('order.update');

    Route::get('/blogpost', 'AdminController@blogpost')->name('blogpost');
    Route::get('/blogpost/uploadImgs', 'AdminController@uploadImgs')->name('uploadImgs');
    Route::get('/blog/create', 'AdminController@create')->name('create');
    Route::post('/blog', 'AdminController@store')->name('store');
    Route::get('/blogpost/{id}/edit', 'AdminController@edit')->name('blogpost.edit');
    Route::put('/blog/{id}', 'AdminController@update')->name('update');
    Route::delete('/blog/{id}', 'AdminController@destroy')->name('destroy');   

});

Route::middleware('auth')->group(function() {
    Route::post('customize/orderTrouser', 'OrderController@orderTrouser')->name('orderTrouser');
    Route::get('/order/render/session.svg', 'OrderController@renderSvgSession')->name('order.renderSvgSession');
    Route::get('/order/render/{order}.svg', 'OrderController@render')->name('order.render');
    Route::get('/order', 'OrderController@index')->name('order.index');
    Route::get('/order/{id}', 'OrderController@show')->name('order.show');
    Route::get('/receipt', 'OrderController@receipt')->name('order.receipt');

    Route::get('/items', 'ItemsController@index')->name('items.index');

    Route::get('/customize/{item}', 'ItemsController@customize')->name('customize');
    Route::get('/svg/{file}.svg', 'SvgController@render')->name('svg.render');

});




Route::get('/login', 'AuthController@login')->name('auth.login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->name('auth.logout')->middleware('auth');
Route::get('/signup', 'AuthController@signup')->name('auth.signup')->middleware('guest');
Route::post('/signup', 'AuthController@postSignup')->name('auth.postSignup')->middleware('guest');

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::get('/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/{id}', 'ProfileController@update')->name('profile.update');
Route::get('/mycustom', 'ProfileController@custom')->name('profile.mycustom');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/{blog}', 'BlogController@show')->name('blog.show');


Route::get('/imageUpload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('/imageUpload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

