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

Route::get('/subscribe', 'HomeController@subscribe')->name('subscribe');

Route::group(['middleware' => 'premium'], function () {
  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('musics/{id}', 'MusicController@index')->name('musics');
  Route::get('search', 'MusicController@search')->name('search');

  Route::get('settings', 'HomeController@settings')->name('settings');
  Route::post('userupdate', 'HomeController@userUpdate')->name('userupdate');
  Route::get('updatepassword', 'HomeController@updatePassword')->name('updatepassword');
  Route::post('changepassword', 'HomeController@changePassword')->name('changepassword');
  
  Route::get('podcast', 'PodcastController@index')->name('podcast');
  Route::get('searchpodcast', 'PodcastController@searchPodcast')->name('searchpodcast');
  Route::get('pc/{id}', 'PodcastController@pc')->name('pc');
  
  

  Route::get('playlists', 'PlaylistController@index')->name('playlists');
  Route::post('playlists', 'PlaylistController@store')->name('addplaylists');
  Route::post('addmusicplaylists', 'PlaylistController@storeMusic')->name('addmusicplaylists');
  Route::post('swap', 'PlaylistController@swapPosition')->name('swap');
  Route::post('deletemusictoplaylist', 'PlaylistController@deleteMusicToPlaylist')->name('deletemusictoplaylist');
  Route::get('playlist/play/{id}', 'PlaylistController@play')->name('playlist/play');
  Route::post('renameplaylist', 'PlaylistController@renamePlaylist')->name('renameplaylist');
  Route::post('deleteplaylist', 'PlaylistController@deletePlaylist')->name('deleteplaylist');


  Route::group(['middleware' => 'admin'], function () {
    Route::get('podcast/add', 'PodcastController@create')->name('podcast/add');
    Route::post('podcast/store', 'PodcastController@store')->name('podcast/store');
    Route::get('podcast/edit/{id}', 'PodcastController@edit')->name('podcast/edit');
    Route::post('podcast/update', 'PodcastController@update')->name('podcast/update');
    Route::get('music/add', 'MusicController@add')->name('music/add');
    Route::post('music', 'MusicController@store')->name('music');
    Route::get('music/edit/{id}', 'MusicController@edit')->name('music/edit');
    Route::post('musicedit', 'MusicController@update')->name('musicedit');
    Route::post('deletemusic', 'MusicController@deleteMusic')->name('deletemusic');

    Route::get('users', 'HomeController@usersList')->name('users');
    Route::post('promotepremium', 'HomeController@promotePremium')->name('promotepremium');
    Route::post('promoteadmin', 'HomeController@promoteAdmin')->name('promoteadmin');
    Route::get('searchuser', 'HomeController@searchUser')->name('searchuser');
  });
});

