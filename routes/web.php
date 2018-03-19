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

Route::get('/', function () {
    return view('form');
});

Route::post('/register','UserControl@register');
Route::get('/all', "UserControl@all");
Route::get('/user/{id}', "UserControl@search");
Route::get('/user/{id}/edit', "UserControl@edit");
Route::get('/user/{id}/delete', "UserControl@delete");
Route::post('/user/update/{id}', "UserControl@update");
