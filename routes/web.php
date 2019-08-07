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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@who');
Route::get('/portfolio', 'PagesController@what');
Route::get('/projects', 'PagesController@projects');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/careers', 'PagesController@careers');
Route::get('/suppliers', 'PagesController@suppliers');


