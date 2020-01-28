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

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function() {

    Route::get('', 'AdminController@index')->name('index');

    Route::get('/users', 'AdminUserController@users')->name('users');
    Route::get('/{user}/edit', 'AdminUserController@edit')->name('admin.userEdit');
    Route::put('/{id}', 'AdminUserController@userUpdate')->name('userUpdate');

    Route::get('/orders', 'AdminOrdersController@orders')->name('orders');
    Route::get('/{order}/orderEdit', 'AdminOrdersController@editOrder')->name('orderEdit');
    Route::put('/{id}', 'AdminOrdersController@updateOrder')->name('updateOrder');

    Route::get('/blogpost', 'AdminController@blogpost')->name('blogpost');
    Route::get('/blogpost/uploadImgs', 'AdminController@uploadImgs')->name('uploadImgs');
    Route::get('/blog/create', 'BlogController@create')->name('create');
    Route::post('/blog', 'BlogController@store')->name('store');
    Route::get('/blog/{id}/edit', 'BlogController@edit')->name('edit');
    Route::put('/blog/{id}', 'BlogController@update')->name('update');
    Route::delete('/blog/{id}', 'BlogController@destroy')->name('destroy');   

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

Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::get('/login', 'AuthController@login')->name('auth.login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->name('auth.logout')->middleware('auth');
Route::get('/signup', 'AuthController@signup')->name('auth.signup')->middleware('guest');
Route::post('/signup', 'AuthController@postSignup')->name('auth.postSignup')->middleware('guest');

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::get('/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/{id}', 'ProfileController@update')->name('profile.update');

Route::get('/imageUpload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('/imageUpload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

