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
Route::prefix('task_manager')->group(function (){
    Route::get('index','UserController@index')->name('task_manager.index');
    Route::get('create','UserController@create')->name('task_manager.create');
    Route::get('edit','UserController@edit')->name('task_manager.edit');
    Route::get('show','UserController@show')->name('task_manager.show');
    Route::get('delete','UserController@delete')->name('task_manager.delete');
});
