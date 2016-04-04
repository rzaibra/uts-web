<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'inventory.index', 'uses' => 'InventoryController@index']);
Route::get('/form', ['as' => 'inventory.form', 'uses' => 'InventoryController@form']);

// Use same controller at POST event for simplified CRUD.
Route::post('/form', ['as' => 'inventory.form', 'uses' => 'InventoryController@form']);
Route::get('/delete', ['as' => 'inventory.delete', 'uses' => 'InventoryController@delete']);
// Route::post('/create', ['as' => 'inventory.create', 'uses' => 'InventoryController@create']);
//
Route::get('/detail/{id}', ['as' => 'inventory.detail', 'uses' => 'InventoryController@detail']);
