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

Route::get('/', function () {
    return view('front');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/instructions', function() {
    return view('instructions');
});




Route::get('/manifestations', 'ManifestationsController@index');
Route::post('/manifestations', 'ManifestationsController@store');
Route::get('/manifestations/create', 'ManifestationsController@create');
Route::get('/manifestations/{message}', 'ManifestationsController@show');
Route::patch('/manifestations/{message}', 'ManifestationsController@update');
Route::delete('/manifestations/{message}', 'ManifestationsController@destroy');
Route::get('/manifestations/{message}/edit', 'ManifestationsController@edit');


Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('home');

