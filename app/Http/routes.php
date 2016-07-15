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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


// Handling user request for voter data

Route::get('/voter', 'VoterController@index');
Route::get('/voter/search', 'VoterController@search');

Route::get('/voter/create', 'VoterController@create');
Route::post('/voter', 'VoterController@store');
