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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login','\App\Http\Controllers\LoginController@showLoginForm')->name('login');
Route::get('/auth/redirect','\App\Http\Controllers\LoginController@redirectToProvider');
Route::get('/auth/callback','\App\Http\Controllers\LoginController@handleProviderCallback');

Route::get('/', 'URLController@index');
Route::get('/new', 'PageController@new');
Route::get('/show/{id}','URLController@show');
Route::get('/gt/{id}','UserURLController@index');

Route::post('/new', 'URLController@store');

