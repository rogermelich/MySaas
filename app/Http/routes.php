<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('auth/github', 'Auth\AuthController@redirectToGithubProvider');
    Route::get('auth/github/callblack', 'Auth\AuthController@hantleGithubProviderCallBlack');
    Route::get('auth/facebook', 'Auth\AuthController@hantleFacebookProvider');
    Route::get('auth/facebook/callblack', 'Auth\AuthController@redirectToFacebookProviderCallBlack');
    Route::get('auth/google', 'Auth\AuthController@hantleGoogleProvider');
    Route::get('auth/google/callblack', 'Auth\AuthController@redirectToGoogleProviderCallBlack');
});

Route::get('/csstransitions', function () {
    return view('tinkerin.csstransitions');
});

