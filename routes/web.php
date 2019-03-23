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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'types', 'middleware' => 'auth'], function() {
    Route::get('/', 'TypeController@index');
    Route::get('/create', 'TypeController@create')->name('type.create');
    Route::post('/create', 'TypeController@store');
});


Route::group(['prefix' => 'nominate', 'middleware' => 'auth'], function() {
    Route::get('/', 'NominateController@index');
    Route::get('/{id}/create', 'NominateController@create')->name('nominate.create');
    Route::post('/{id}/create', 'NominateController@store');
});

Route::group(['prefix' => 'vote', 'middleware' => 'auth'], function() {
    Route::get('/', 'VoteController@index');
    Route::post('/{type}/{nominate}/', 'VoteController@up')->name('vote');
    Route::post('/{type}/{nominate}/unvote', 'VoteController@down')->name('unvote');
});
