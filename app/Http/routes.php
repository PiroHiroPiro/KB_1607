<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Contents;

Route::get('/', function () {
		$Contents = Contents::all();
    return view('top', ["Contents" => $Contents]);
});
Route::controller('/content', 'ContentsController');
Route::controller('/timeline', 'TimelinesController');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('/signup', function(){
	return view('signup');
});
