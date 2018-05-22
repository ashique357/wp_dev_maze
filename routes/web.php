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
    return view('welcome');
});

Route::get('/wp', function () {
    return view('wp_dev_maze');
});

Route::get('/category','CategoryController@form');
Route::get('/category','CategoryController@getValueOfMenu');
Route::get('/category/{getValue}','CategoryController@getNamesOfMenu');
Route::get('category-view','CategoryController@manageCategory');
Route::get('add-category','CategoryController@addCategory')->name('add.category');
