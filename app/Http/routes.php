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
    Route::get('user', 'UsersController@index');
    //
    Route::get('downloadInvoice', 'PDFController@downloadInvoice');
    Route::get('Invoice', 'PDFController@invoicehtml');
    //jsPDF
    Route::get('jsPDFInvoice', 'jsPDFController@downloadInvoice');
    Route::get('jsInvoice', 'jsPDFController@invoicehtml');

    Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

    Route::get('/plans', 'PlansController@index');

    Route::get('/register_subcription', function () {
        return view('auth.register_subscription');
    });

    Route::get('/subscription_payment', 'SubscriptionController@PaySubscribe');

//    Route::get('auth/github', 'Auth\AuthController@redirectToGithubProvider');
//    Route::get('auth/github/callblack', 'Auth\AuthController@hantleGithubProviderCallBlack');
//
//    Route::get('auth/twitter', 'Auth\AuthController@redirectToTwitterProvider');
//    Route::get('auth/twitter/callblack', 'Auth\AuthController@hantleTwitterProviderCallBlack');
//
//    Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebookProvider');
//    Route::get('auth/facebook/callblack', 'Auth\AuthController@hantleFacebookProviderCallBlack');
//
//    Route::get('auth/google', 'Auth\AuthController@redirectToGoogleProvider');
//    Route::get('auth/google/callblack', 'Auth\AuthController@hantleGoogleProviderCallBlack');
});

Route::get('/csstransitions', function () {
    return view('tinkerin.csstransitions');
});

