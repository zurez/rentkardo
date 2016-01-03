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

Route::get('contactus',"PageController@getcontactus");
Route::post('contactus',"PageController@postcontactus");

//Logout
Route::get('/logout',"LogController@logout");
// **********************.***Login

Route::get("/login","LogController@index");
//Login & Signup Post
Route::post("account",array('uses'=>"LogController@login"));
Route::post("signup",array('uses'=>"LogController@create"));

//Locked Links i.e only after log in accessible 
Route::group(array('before' => 'auth'), function(){
		Route::get('message',array('as'=>'message','uses'=>'BookController@message'));
		Route::get('book/{id}/request',array('as'=>'request','uses'=>'BookController@request'));
		Route::get('book/{id}/wishlist',array('as'=>'wish','uses'=>'BookController@wishlist'));
		Route::get('requests','UserController@requests');
		Route::get('account',array('as'=>'account','uses'=>'UserController@account'));
		Route::get('addbook','BookController@index');
		Route::post('addbook','BookController@create');
		Route::get('wishlist',"UserController@wishlist");
		Route::get('delete/{id}/book',array('as' =>'delete','uses'=>'UserController@destroy' ));
		Route::get('edit/{id}/book',array('as'=>'edit','uses'=>'UserController@update'));
		Route::get('create',array('as'=>'create','uses'=>'UserController@create'));
		Route::post('create','UserController@store');
		//Customer
		// Route::get('download/{token}/{username}/script',array('as'=>'download','uses'=>'DownloadController@download'));
		// Route::get('order/status', array(
		//     'as' => 'payment.status',
		//     'uses' => 'PaypalController@getPaymentStatus',
		// ));
});//Locked Links