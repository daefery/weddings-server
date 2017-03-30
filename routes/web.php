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
    return view('welcome');
});
Route::get('/api/v1/guest/{id?}', 'Wedding@index');
Route::post('/api/v1/guest', 'Wedding@store');
Route::post('/api/v1/guest/{id}', 'Wedding@update');
Route::delete('/api/v1/guest/{id}', 'Wedding@destroy');