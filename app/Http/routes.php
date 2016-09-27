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
Route::auth();

Route::get('/', function () {
    return view('index');
});

Route::get('/somos', function () {
    return view('about');
});

Route::get('/paquetes', function () {
    return view('package');
});

Route::get('/eventos', function () {
    return view('events');
});

Route::get('/noticias', function () {
    return view('news');
});

Route::get('/contacto', function () {
    return view('contact');
});


Route::get('/home', 'HomeController@index');
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');