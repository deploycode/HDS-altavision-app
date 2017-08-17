<?php

Route::get('/','FrontController@index');
Route::get('admin','FrontController@admin');
Route::get('whatsapp','FrontController@whatsapp');
Route::get('estados-financieros/2017','FrontController@estados2017');

Route::resource('posts','PostController');
Route::resource('users','UsersController');
Route::resource('reviews','ReviewsController');

Route::resource('mail','MailController');
Route::resource('log','LogController');
Route::get('login','LogController@index');
Route::get('logout','LogController@logout');

Route::resource('firstmenu','FirstMenuController');
Route::resource('secondmenu','SecondMenuController');
Route::resource('thirdmenu','ThirdMenuController');

Route::get('secondsmenus/{id}',      'FirstMenuController@getSecondsMenus');
Route::get('thirdsmenus/{id}',        'SecondMenuController@getThirdsMenus');

Route::get('frecuencia-recomendada/{slug}',   'PostController@show');
Route::get('enfermedades-visuales/{slug}',    'PostController@show');
Route::get('enfermedades-sistemicas/{slug}',  'PostController@show');
Route::get('articulos/{slug}',                'PostController@show');
Route::get('examenes/{slug}',                 'PostController@show');
Route::get('cirugias-y-tratamientos/{slug}',  'PostController@show');
Route::get('prevencion/{slug}',               'PostController@show');
Route::get('nuestra-clinica/{slug}',          'PostController@show');
Route::get('autoComplete',                    'PostController@autoComplete');

// RUTAS MANUALES
Route::get('{slug}',  'PostController@show');
