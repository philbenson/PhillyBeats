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

Route::get('/ng', function() {
    return view('ng');
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('affiliations', 'AffiliationController');

Route::resource('artists', 'ArtistController');

Route::resource('events', 'EventController');

Route::resource('genres', 'GenreController');

Route::resource('venues', 'VenueController');