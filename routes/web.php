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
    return redirect()->route('login');
});
Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/dashboard','AdminController@index')->name('dashboard');
    Route::get('create','CategoryController@create')->name('create');
    Route::post('store','CategoryController@store')->name('store');
    Route::get('edit/{id}','CategoryController@edit')->name('edit');
    Route::post('update/{id}','CategoryController@update')->name('update');
    Route::get('','AdminController@logout')->name('logout');
});
Route::group(['as'=>'author.','prefix'=>'author','middleware'=>['auth','author']],function (){
    Route::get('/dashboards','AuthorController@index')->name('dashboard');
    Route::get('create','CategoryController@create')->name('create');
    Route::post('store','CategoryController@store')->name('store');
    Route::get('edit/{id}','CategoryController@edit')->name('edit');
    Route::post('update/{id}','CategoryController@update')->name('update');
    Route::get('','AuthorController@logout')->name('logout');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');