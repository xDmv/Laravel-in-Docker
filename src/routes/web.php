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

Route::get('/', 'IndexController@index');

//Route::get('/admins', 'Admin\DashboardController@index');

//Route::resource('/admins/command','Admin\CommandController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/team', 'TeamController@index')->name('team');
