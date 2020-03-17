<?php


use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('login');
//});

Route::get('/','personaController@index');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');





