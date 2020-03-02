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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('musics/{id}', 'MusicController@index')->name('musics');
Route::get('search', 'MusicController@search')->name('search');

Route::get('playlists/{id}', 'PlaylistController@index')->name('playlists');
Route::post('playlists', 'PlaylistController@store')->name('playlists');

Route::group(['middleware' => 'admin'], function () {
  Route::get('music/add', 'MusicController@add')->name('music/add');
  Route::post('music', 'MusicController@store')->name('music');
  Route::get('music/edit/{id}', 'MusicController@edit')->name('music/edit');
  Route::post('musicedit', 'MusicController@update')->name('musicedit');
});

