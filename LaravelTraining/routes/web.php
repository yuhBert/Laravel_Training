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



    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addHuman', 'UserController@addHuman')->name('add');
Route::get('/delete/{id?}', 'UserController@delete')->name('delete');
Route::get('/welcome/{id?}', 'UserController@welcome')->name('welcome');
Route::get('/editHuman/{id?}', 'UserController@editHuman')->name('edit');

Route::post('/addHuman/post', 'UserController@create')->name('create');
Route::post('/editHuman/{id?}', 'UserController@update')->name('update');






