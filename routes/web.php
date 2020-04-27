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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login2','AuthController@login');
Route::resource('/setjadwal','jadwalController');
Route::post('/setjadwal/create','jadwalController@create');

Route::resource('/pembuktian','pembuktianController');
Route::post('/pembuktian/create','pembuktianController@create');

Route::resource('/raport','raportController');
Route::resource('/menu','menuController');
Route::resource('/laporan2','laporanController');

Route::resource('/datadiri','datadiriController');
Route::post('/datadiri/create','datadiriController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
