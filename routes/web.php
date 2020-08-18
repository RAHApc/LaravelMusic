<?php

Route::get('/','HomeController@index')->name('/');

Route::post('/search','HomeController@search');

Route::get('/listItemMusic/{id}',['uses'=>'MusicController@listItemMusic','as'=>'Music.listAlbum']);

Route::get('/download/{music}','MusicController@download');



Route::prefix('album')->group(function (){
    Route::get('/all','AlbumController@index');
    Route::get('/listItem/{id}','AlbumController@listItem');
    Route::get('/{trackAlbum}','AlbumController@trackAlbum');
});

Route::prefix('music')->group(function (){

    Route::get('/listTracks/{id}','MusicController@listTracks');
    Route::get('/Tracks','MusicController@Tracks');
    Route::get('/trackMusic','MusicController@trackMusic');
    Route::get('/track/{trackMusic}','MusicController@track');
    Route::get('/itemAudio/{id}','MusicController@itemAudio');
    Route::post('/comment','MusicController@Comment');
    Route::get('/selectItemMusic/{id}','MusicController@selectItemMusic');
    Route::get('/event','MusicController@event');
    Route::get('/like/{id}','MusicController@like');

});


//-------------------------------Admin---------------------------------------

Route::namespace('Admin')->prefix('admin')->middleware(['auth','admin.route'])->group(function(){

    Route::get('/','AdminController@index');
    Route::resource('categories','CategoryController');
    Route::resource('albums','AlbumController');
    Route::resource('musics','MusicController');
    Route::resource('singers','SingerController');
    Route::resource('comments','CommentController');
    Route::resource('events','EventController');
    Route::resource('levels','LevelAdminController')->parameters(['levels'=>'user']);
    Route::get('users','UserController@index');
    Route::delete('/users/{user}/destroy','UserController@destroy')->name('users.destroy');
    Route::resource('permissions','PermissionController');
    Route::resource('roles','RoleController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


