<?php


use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('login');
//});

Route::get('/','personaController@index');
Route::get('/admin','personaController@ingreso');





