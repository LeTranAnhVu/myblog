<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->namespace('Api\V1')->name('api.v1.')->group(function () {
    //base route : api/v1/
    //controller at : App\Http\Controllers\Api\V1
    //route name: api.v1.*

    // auth
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
    });
    //admin
    Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['jwt.auth','role:admin|mod'])->group(function () {
        //base route : api/v1/admin
        //controller at : App\Http\Controllers\Api\V1\Admin
        //route name: api.v1.admin*

        // article
        Route::get('articles', 'ArticleController@index');
        Route::post('articles', 'ArticleController@store');
        Route::get('articles/{id}', 'ArticleController@show');
        Route::put('articles/{id}', 'ArticleController@update');
        Route::patch('articles/{id}/publish', 'ArticleController@publish');
        Route::delete('articles/{id}', 'ArticleController@destroy');

        Route::get('categories', 'CategoryController@index');
        Route::post('categories', 'CategoryController@store');
        Route::get('categories/{id}', 'CategoryController@show');
        Route::put('categories/{id}', 'CategoryController@update');
        Route::delete('categories/{id}', 'CategoryController@destroy');

        Route::prefix('shop')->namespace('Shop')->group(function(){
            //base route : api/v1/admin/shop
            //controller at : App\Http\Controllers\Api\V1\Admin\Shop
            Route::resource('products', 'ProductController');
            Route::patch('products/{id}/restore', 'ProductController@restore');
            Route::resource('brands', 'BrandController');
            Route::patch('brands/{id}/restore', 'BrandController@restore');
        });
    });
});