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

Route::get('/', [
    'uses' => 'ForntendController@index',
    'as' => 'index'
]);
Route::get('/about', [
    'uses' => 'ForntendController@about',
    'as' => 'about'
]);
Route::get('/practice', [
    'uses' => 'ForntendController@practice',
    'as' => 'practiceArea'
]);
Route::get('/attorneys', [
    'uses' => 'ForntendController@attorneys',
    'as' => 'attorneys'
]);
Route::get('/Blog', [
    'uses' => 'ForntendController@Blog',
    'as' => 'blog'
]);
Route::get('/message/create', [
    'uses' => 'MessageController@create',
    'as' => 'message.create'
]);

Route::get('/post/{slug}', [
	
    'uses' => 'ForntendController@singlePost',

    'as' => 'post.single'
]);
Route::get('/practice/{slug}', [
	
    'uses' => 'ForntendController@singlePractice',

    'as' => 'practice.single'
]);
Route::get('/category/{id}', [
	
    'uses' => 'ForntendController@singleCategory',

    'as' => 'category.single'
]);

Route::post('/message/store', [
    'uses' => 'MessageController@store',
    'as' => 'message.store'
]);

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/dashboard', [
        'uses' => 'HomeController@index',
        'as' => 'dashboard'
    ]);
	Route::get('/message', [
        'uses' => 'MessageController@index',
        'as' => 'message.index'
    ]);
    Route::get('/user/index', [
        'uses' => 'ForntendController@user',
        'as' => 'user.index'
    ]);
	
	 Route::get('/practice/create', [
        'uses' => 'PractiseAreaController@create',
        'as' => 'practice.create'
    ]);
    Route::get('/practices', [
        'uses' => 'PractiseAreaController@index',
        'as' => 'practice'
    ]);
    Route::get('/practice/edit/{id}', [
        'uses' => 'PractiseAreaController@edit',
        'as' => 'practice.edit'
    ]);
    Route::get('/practice/delete/{id}', [
        'uses' => 'PractiseAreaController@destroy',
        'as' => 'practice.delete'
    ]);
    Route::post('/practice/store', [
        'uses' => 'PractiseAreaController@store',
        'as' => 'practice.store'
    ]);
	  Route::post('/practice/update/{id}', [
        'uses' => 'PractiseAreaController@update',
        'as' => 'practice.update'
    ]);

    //Atornies
    Route::get('/atornies/create', [
        'uses' => 'AtorniiesController@create',
        'as' => 'atornies.create'
    ]);
    Route::get('/atornies', [
        'uses' => 'AtorniiesController@index',
        'as' => 'atornies'
    ]);
    Route::get('/atornies/edit/{id}', [
        'uses' => 'AtorniiesController@edit',
        'as' => 'atornies.edit'
    ]);
    Route::get('/atrony/delete/{id}', [
        'uses' => 'AtorniiesController@destroy',
        'as' => 'atornies.delete'
    ]);
    Route::post('/atornies/store', [
        'uses' => 'AtorniiesController@store',
        'as' => 'atornies.store'
    ]);
	  Route::post('/atorny/update/{id}', [
        'uses' => 'AtorniiesController@update',
        'as' => 'atornies.update'
    ]);

    //Blog Post

    Route::get('/post/create', [
        'uses' => 'BlogPostController@create',
        'as' => 'post.create'
    ]);
    Route::get('/posts', [
        'uses' => 'BlogPostController@index',
        'as' => 'posts'
    ]);
    Route::get('/post
    /edit/{id}', [
        'uses' => 'BlogPostController@edit',
        'as' => 'post.edit'
    ]);
    Route::get('/post/delete/{id}', [
        'uses' => 'BlogPostController@destroy',
        'as' => 'post.delete'
    ]);
    Route::post('/store', [
        'uses' => 'BlogPostController@store',
        'as' => 'post.store'
    ]);
	  Route::post('/post/update/{id}', [
        'uses' => 'BlogPostController@update',
        'as' => 'post.update'
    ]);



});
