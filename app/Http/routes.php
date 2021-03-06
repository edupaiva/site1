<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {    return view('welcome');});


Route::get('/', 'PagesController@index')->name('pages.home');
Route::get('/produtos', 'PagesController@produtos')->name('pages.product');
Route::get('/estrutura', 'PagesController@estrutura')->name('pages.structure');
Route::get('/contatos', 'PagesController@contatos')->name('pages.contact');