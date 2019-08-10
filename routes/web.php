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


//Auth::routes();

Route::namespace('Web')->name('web.')->group(function () {
    Route::domain('blog.myblog.com')->group(function () {
        Route::get('/', function () {
            return redirect('/home');
        });
        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('/send-email', 'EmailController@sendNewsLetter')->name('send_email');
        Route::get('/articles/{slug}', 'ArticleController@index')->name('article');
    });

    Route::domain('shop.myblog.com')->group(function () {
        // shop
        Route::get('/', 'ShopController@index')->name('shop');
        Route::get('/products', 'ProductController@list')->name('product_list');
        Route::get('/products/detail', 'ProductController@detail')->name('product_detail');
    });


});