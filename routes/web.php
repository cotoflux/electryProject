<?php

use App\Http\Controllers\FrasesController;
use GuzzleHttp\Client;

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

Route::get('/', 'FrasesController@index');

Route::resource('json-api', 'ApiController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
