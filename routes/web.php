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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@weather');

Route::get('/post/{id}/', 'PostsController@post')->name('post');

Route::get('/blog', 'PostsController@blog')->name('blog');

Route::auth();

Route::group(['middleware' => 'admin'], function()
{
    Route::get('/admin', 'AdministratorsController@index')->name('admin.index');
    
    Route::resource('/admin/users', 'AdminUsersController', ['names'=>[
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]]);

    Route::resource('/admin/posts', 'PostsController', ['names'=>[
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]]);

    Route::resource('/admin/categories', 'CategoriesController', ['names'=>[
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]]);

    Route::resource('/admin/media', 'GalleriesController', ['names'=>[
        'index' => 'admin.media.index',
        'create' => 'admin.media.create',
        'store' => 'admin.media.store',
        'edit' => 'admin.media.edit',
        'update' => 'admin.media.update',
        'destroy' => 'admin.media.destroy',
    ]]);

    Route::delete('delete/media', 'GalleriesController@deleteMedia');

    Route::resource('/admin/comments', 'CommentsController', ['names'=>[
        'index' => 'admin.comments.index',
        'create' => 'admin.comments.create',
        'show' => 'admin.comments.show',
        'store' => 'admin.comments.store',
        'edit' => 'admin.comments.edit',
        'update' => 'admin.comments.update',
        'destroy' => 'admin.comments.destroy',
    ]]);

    Route::resource('/admin/comment/replies', 'CommentRepliesController', ['names'=>[
        'index' => 'admin.comment.replies.index',
        'create' => 'admin.comment.replies.create',
        'show' => 'admin.comment.replies.show',
        'store' => 'admin.comment.replies.store',
        'edit' => 'admin.comment.replies.edit',
        'update' => 'admin.comment.replies.update',
        'destroy' => 'admin.comment.replies.destroy',
    ]]);

});


