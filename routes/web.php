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


Route::get('/',['uses'=>'Client\ClientController@index','as'=>'home']);
Route::get('/step1/{id?}',['uses'=>'Client\ClientController@step1','as'=>'step1']);
Route::get('/step2/{id?}',['uses'=>'Client\ClientController@step2','as'=>'step2']);

