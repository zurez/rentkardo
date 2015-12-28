<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',"IndexController@index");
Route::get('index',"IndexController@index");
Route::get("/login","LogController@index");
Route::get('contactus',"PageController@getcontactus");
Route::post('contactus',"PageController@postcontactus");
Route::get('addbook','BookController@index');
Route::post('addbook','BookController@create');
