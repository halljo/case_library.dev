<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('cards', 'CardsController@index');
Route::get('cards/create', 'CardsController@create');
Route::get('cards/{card}', 'CardsController@show');


Route::get('hospitals', 'HospitalsController@index');
Route::get('hospitals/{hospital}', 'HospitalsController@show');