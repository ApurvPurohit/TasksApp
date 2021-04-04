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

use App\Task;
use Illuminate\Http\Request;

/**
    * Show Task Dashboard
    */
Route::get('/', 'UserController@show');

/**
    * Add New Task
    */
Route::post('/task', 'UserController@add');
   
/**
    * Delete Task
    */
Route::delete('/task/{id}', 'UserController@delete');
