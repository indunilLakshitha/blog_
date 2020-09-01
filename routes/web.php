<?php





Route::get ('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/blog','PagesController@blog');

Route::resource('/posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
