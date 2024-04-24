<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    // Categories endpoints
    Route::get('/categories', 'CategoryController@index');
    Route::post('/categories', 'CategoryController@store');
    Route::get('/categories/{id}', 'CategoryController@show');
    Route::put('/categories/{id}', 'CategoryController@update');
    Route::delete('/categories/{id}', 'CategoryController@destroy');

    // Users endpoints
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::get('/users/{id}', 'UserController@show');
    Route::put('/users/{id}', 'UserController@update');
    Route::delete('/users/{id}', 'UserController@destroy');

    // Posts endpoints
    Route::get('/posts', 'PostController@index');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{id}', 'PostController@show');
    Route::put('/posts/{id}', 'PostController@update');
    Route::delete('/posts/{id}', 'PostController@destroy');

    // Comments endpoints
    Route::get('/comments', 'CommentController@index');
    Route::post('/comments', 'CommentController@store');
    Route::get('/comments/{id}', 'CommentController@show');
    Route::put('/comments/{id}', 'CommentController@update');
    Route::delete('/comments/{id}', 'CommentController@destroy');
});
