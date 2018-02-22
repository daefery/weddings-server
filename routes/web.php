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

Route::get('/api/v1/guests/{id?}', 'WeddingController@index');
Route::post('/api/v1/guests', 'WeddingController@store');
Route::post('/api/v1/guests/{id}', 'WeddingController@update');
Route::delete('/api/v1/guests/{id}', 'WeddingController@destroy');

Route::get('/api/v1/section/{id?}', 'SectionController@index');
Route::post('/api/v1/section', 'SectionController@add');
Route::post('/api/v1/section/{id}', 'SectionController@update');
Route::delete('/api/v1/section/{id}', 'SectionController@destroy');

Route::get('/api/v1/question/{id?}', 'QuestionController@index');
Route::post('/api/v1/question', 'QuestionController@add');
Route::post('/api/v1/questionsection', 'QuestionController@getbysection');
Route::post('/api/v1/question/{id}', 'QuestionController@update');
Route::delete('/api/v1/question/{id}', 'QuestionController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
