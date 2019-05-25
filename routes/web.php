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

Route::get('/', 'ApiController@newsapi');
Route::post('/source_id', 'ApiController@newsapi');
Route::get('/createdailytrends','DailyTrendsController@create');
Route::post('/createdailytrends','DailyTrendsController@store');
Route::get('dailytrends','DailyTrendsController@index');
Route::get('/edit/dailytrends/{id}','DailyTrendsController@edit');
Route::post('/edit/dailytrends/{id}','DailyTrendsController@update');
Route::delete('/delete/dailytrends/{id}','DailyTrendsController@destroy');
