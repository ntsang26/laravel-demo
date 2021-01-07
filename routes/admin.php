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

Auth::routes();

Route::group(['namespace' => 'Admin'], function () {

    Route::get('/admin-login', [
        'as' => 'admin.login',
        'uses' => 'UserController@getLogin',
    ]);

    Route::post('/admin-login', [
        'as' => 'admin.login',
        'uses' => 'UserController@postLogin',
    ]);

    Route::get('/admin-logout', [
        'as' => 'admin.logout',
        'uses' => 'UserController@getLogout',
    ]);
});

Route::group(['prefix' => 'admin','namespace' => 'Admin',
    'middleware' => 'user' ], function () {

    Route::get('/',[
        'as' => 'admin.dashboard',
        'uses' => 'AdminController@dashboard'
    ]);

    // Region Admin Product
    Route::group(['prefix' => 'product'], function () {
        Route::group([], function () {
            Route::get('list-product', [
                'as' => 'admin.product.list',
                'uses' => 'ProductController@getListProduct'
            ]);

            Route::get('add-product', [
                'as' => 'admin.product.add',
                'uses' => 'ProductController@getAddProduct'
            ]);
        });

        Route::group([], function () {
            Route::get('list-cate-product', [
                'as' => 'admin.product.cate.getList',
                'uses' => 'ProductController@getListCate'
            ]);

            Route::get('add-cate-product', [
                'as' => 'admin.product.cate.getAddCate',
                'uses' => 'ProductController@getAddCate'
            ]);

            Route::post('add-cate-product', [
                'as' => 'admin.product.cate.postAddCate',
                'uses' => 'ProductController@postAddCate'
            ]);

            Route::get('edit-cate-product/{id}', [
                'as' => 'admin.product.cate.getEditCate',
                'uses' => 'ProductController@getEditCate'
            ]);

            Route::post('edit-cate-product/{id}', [
                'as' => 'admin.product.cate.postEditCate',
                'uses' => 'ProductController@postEditCate'
            ]);

            Route::get('delete-cate-product/{id}', [
                'as' => 'admin.product.cate.getDeleteCate',
                'uses' => 'ProductController@getDeleteCate'
            ]);
        });

    });
    // End Region

    // Region user
    Route::group(['prefix' => 'user'], function () {
        Route::get('list-user-register', [
            'as' => 'admin.user.getListRegister',
            'uses' => 'UserController@getListUserRegister'
        ]);
    });
    // End region
    
});

