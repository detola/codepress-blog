<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/post/{id}/', 'PostsController@post')->name('post');

Route::get('/blog', 'PostsController@blog')->name('blog');


Route::group(['middleware' => 'admin'], function()
{
    Route::resource('/admin/users', 'AdminUsersController');

    Route::resource('/admin/posts', 'PostsController');

    Route::resource('/admin/categories', 'CategoriesController');

    Route::resource('/admin/media', 'GalleriesController');


    Route::resource('/admin/comments', 'CommentsController');

    Route::resource('/admin/comment/replies', 'CommentRepliesController');



});

