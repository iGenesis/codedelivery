<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/auth/login', function () {
        return view('auth/login');
    });

    Route::get('/password/email', function () {
        return view('auth/password');
    });

    Route::get('/password/reset', function () {
        return view('auth/reset');
    });

    Route::get('/auth/register', function () {
        return view('auth/register');
    });

    Route::get('admin/categories', ['as'=>'admin.categories.index', 'uses'=>'CategoriesController@index']);
    Route::get('admin/categories/create', ['as'=>'admin.categories.create', 'uses'=>'CategoriesController@create']);
    Route::post('admin/categories/store', ['as'=>'admin.categories.store', 'uses'=>'CategoriesController@store']);

});
