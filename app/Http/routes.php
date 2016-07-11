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

Route::get('/', 'TestingController@index');


Route::post('api/register', 'TestingController@register');
Route::post('api/authenticate', 'TestingController@authenticate');
Route::get('api/authenticate/user', 'TestingController@getAuthenticatedUser');