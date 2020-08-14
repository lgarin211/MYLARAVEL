<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/one', 'Index@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', "TryLogiController@index");
// Route::get('/login/get', "TryLogiController@get");
Route::get('/login/set', "TryLogiController@set");

Route::post('/login/set', "TryLogiController@set");

Route::get('/login/delet', "TryLogiController@del");

Route::post('/login/upload', "TryLogiController@upload");
