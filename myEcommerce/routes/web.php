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
    return view('admin/layouts/app');
});
Route::resource('admin/item', 'ItemController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/order', 'OrderController');


// Route::get('/post/create', 'PostController@create')->name('post.create');
// Route::post('/post/create', 'PostController@store')->name('post.store');

// Route::get('/item/create', 'ItemController@create')->name('item.create');
// Route::post('/item/create', 'ItemController@store')->name('item.store');

Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@postRegister')->name('register');
Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin')->name('login');


