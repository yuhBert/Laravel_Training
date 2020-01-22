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

// Route::get('/show', 'HomeController@index')->name('home');
Route::get('/data', 'crudController@showAdd')->name('add');
Route::post('/add', 'crudController@add');
Route::get('/show', 'crudController@crudTest')->name('home');
Route::get('/delete/{id?}', 'crudController@delete')->name('delete');


