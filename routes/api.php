<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group('');

Route::get('/tracks' , 'Track\TrackController@list')->name('tracks');

Route::get('/genres' , 'Genre\GenreController@list')->name('genres');

Route::get('/authors' , 'Author\AuthorController@list')->name('authors');

Route::get('/years' , 'Track\TrackController@getYear')->name('years');
