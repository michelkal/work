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



Route::get('/signup', 'UsersController@getUserRegister');
Route::get('view-progress', 'UsersController@getProgressList');
Route::get('/', function(){

	return view('home');
	//return view('soon');

});

Route::get('/login', function(){
	return view('home');
});

Route::post('/addShareHelper', 'UsersController@registerNewUser');

Route::group(['prefix' => 'office', 'middleware' => 'auth'], function(){
	Route::get('/', function () {
		return view('welcome');
	});
});