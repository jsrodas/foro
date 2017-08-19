<?php

// Route that required authentication

// Post

Route::get('posts/create', [
	'uses' => 'CreatePostController@create',
	'as' => 'posts.create',
]);

Route::post('posts/create', [
	'uses' => 'CreatePostController@store',
	'as' => 'posts.store',
]);

// Comments
Route::post('post/{post}/comment', [
	'uses' => 'CommentController@store',
	'as' => 'comments.store'
]);