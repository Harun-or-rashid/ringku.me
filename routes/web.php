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
Route::group(['as'=>'category.','prefix'=>'category'],function (){
    Route::get('/','CategoryController@index');
    Route::get('create','CategoryController@create')->name('create');
    Route::post('store','CategoryController@store')->name('store');
    Route::get('edit/{id}','CategoryController@edit')->name('edit');
    Route::post('update/{id}','CategoryController@update')->name('update');
    Route::get('delete/{id}','CategoryController@destroy')->name('delete');
});

