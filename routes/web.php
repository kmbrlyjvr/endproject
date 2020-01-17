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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact.index');
Route::get('/receipt', 'OrderController@receipt')->name('order.receipt');

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function() {

    Route::get('', 'AdminController@index')->name('index');
    Route::get('/users', 'AdminController@users')->name('users');
    Route::get('/blogpost', 'AdminController@blogpost')->name('blogpost');
    Route::get('/blogpost/uploadImgs', 'AdminController@uploadImgs')->name('uploadImgs');
    Route::get('/blog/upload', 'AdminController@upload')->name('upload');
    Route::get('/blog/create', 'AdminController@create')->name('create');
    Route::post('/blog', 'AdminController@store')->name('store');
    Route::get('/blog/{id}/edit', 'AdminController@edit')->name('edit');
    Route::put('/blog/{id}', 'AdminController@update')->name('update');
    Route::delete('/blog/{id}', 'AdminController@destroy')->name('destroy');

});


/*Route::group(['middleware' => ['auth', 'admin']], function(){
        Route::get('/index', function (){
           return view('admin.index');
        });
});
Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware']], function() {
    Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('admin');
});*/

Route::get('/login', 'AuthController@login')->name('auth.login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->name('auth.postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->name('auth.logout')->middleware('auth');
Route::get('/signup', 'AuthController@signup')->name('auth.signup')->middleware('guest');
Route::post('/signup', 'AuthController@postSignup')->name('auth.postSignup')->middleware('guest');


Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/items', 'ItemsController@index')->name('items.index');
Route::get('/help', 'HomeController@help')->name('help');
Route::get('/profile/{user}', 'ProfileController@profile')->name('profile');
Route::get('/{user}', 'ProfileController@show')->name('show');

Route::get('/customize/{item}', 'ItemsController@customize')->name('customize');
Route::get('/{item}', 'ItemsController@show')->name('show');
Route::get('/svg/{file}.svg', 'SvgController@render')->name('svg.render');

Route::post('customize/orderTrouser', 'OrderController@orderTrouser')->name('orderTrouser');
Route::get('/order/render/session.svg', 'OrderController@renderSvgSession')->name('order.renderSvgSession');
Route::get('/order/render/{order}.svg', 'OrderController@render')->name('order.render');
Route::get('/order/{id}', 'OrderController@show')->name('order.show');


/*Route::get('/{id}/edit', 'OrderController@edit')->name('edit');
Route::put('/{id}', 'OrderController@update')->name('update');
Route::delete('/{id}', 'OrderController@destroy')->name('destroy');*/

Route::get('/imageUpload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('/imageUpload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

