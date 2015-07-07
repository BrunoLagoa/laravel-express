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
Route::get('/', 'PostsController@index');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::group(['prefix'=>'posts'], function(){
        Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
        Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
        Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
        Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);
    });
    Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
});



Route::get('blogs', ['as' => 'blogs.index', 'uses' => 'TestController@blog']);
Route::get('laravel-version', function() {
    $laravel = app();
    return "Sua versão do Laravel é ".$laravel::VERSION;
});

/*

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('/auth', function(){
    // $user = \App\User::find(1);
    // Auth::login($user);

    if(Auth::attempt(['email'=>'bruno@gmail.com','password'=>'123'])){
        return "Autenticado";
    }

    return "Erro ao ser Autenticado";
});

Route::get('/auth/login', 'Auth\AuthController@getLogin');

Route::get('/auth/logout', function(){
   Auth::logout();
});

*/