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



Route::get('/','LoginController@index')->name('login.index');
Route::post('/',['uses'=>'LoginController@varify'] );

Route::get('/admin/home', 'HomeController@index')->name('admin.home');
Route::get('/admin/create', 'HomeController@create')->name('admin.create');
Route::post('/admin/create', 'HomeController@store');
