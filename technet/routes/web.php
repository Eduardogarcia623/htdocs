<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/Admin', function () {
    return view('Admin');

});
Route::get('/User', function () {
    return view('User');
});

