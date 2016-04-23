<?php

Route::get('/', 'PostsController@showIndex');
Route::get('create/post', 'PostsController@showCreatePost');
Route::post('create/post', 'PostsController@createPost');
Route::get('post/{post}', 'PostsController@showUpdatePost');
Route::patch('post/{post}', 'PostsController@updatePost');

Route::auth();

Route::get('/home', 'HomeController@index');