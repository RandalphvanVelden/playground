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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/basicplayer', 'BasicplayerController');
Route::resource('/team', 'TeamController');

// player controllers
Route::resource('/player', 'PlayerController');
Route::get('/player/{player}/skill', 'PlayerController@skilledit');
Route::patch('/player/{player}/skill', 'PlayerController@skillupdate');