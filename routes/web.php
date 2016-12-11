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

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('cards', 'CardsController@index');
Route::get('cards/{hospital}/create', 'CardsController@create');
Route::get('cards/{card}', 'CardsController@show');
Route::post('cards/{hospital}/store', 'CardsController@store');


Route::get('hospitals', 'HospitalsController@index');
Route::get('hospitals/{hospital}', 'HospitalsController@show');