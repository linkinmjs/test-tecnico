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

// RUTAS GLOBAL
Route::get('/', 'HomeController@')->name('home_path');

// RUTAS DE TAREAS
Route::get('/task', 'TaskController@index')->name('task_index_path');
Route::group([
    'prefix' => 'task'
], function() {
    Route::post('search', 'TaskController@search')->name('task_search_path');
    Route::get('create', 'TaskController@create')->name('task_create_path');
    Route::post('store', 'TaskController@store')->name('task_store_path');
    Route::get('show/{id}', 'TaskController@show')->name('task_show_path');
    Route::get('edit/{id}', 'TaskController@edit')->name('task_edit_path');
    Route::get('destroy/{id}', 'TaskController@destroy')->name('task_destroy_path');
    Route::post('update', 'TaskController@update')->name('task_update_path');
    Route::get('update_status/{id}', 'TaskController@updateStatus')->name('task_update_status_path');
});

// RUTAS DE Categorías
Route::get('/category', 'CategoryController@index')->name('category_index_path');
Route::group([
    'prefix' => 'category'
], function() {
    Route::post('search', 'CategoryController@search')->name('category_search_path');
    Route::get('create', 'CategoryController@create')->name('category_create_path');
    Route::get('show/{id}', 'CategoryController@show')->name('category_show_path');
    Route::get('edit/{id}', 'CategoryController@edit')->name('category_edit_path');
    Route::get('destroy/{id}', 'CategoryController@destroy')->name('category_destroy_path');
    Route::post('update', 'CategoryController@update')->name('category_update_path');
    Route::post('store', 'CategoryController@store')->name('category_store_path');
    Route::get('update_status/{id}', 'CategoryController@updateStatus')->name('category_update_status_path');
});
