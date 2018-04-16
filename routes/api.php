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

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::resource('hotel', 'HotelController');

// Route::get('hotel', 'HotelController@index');
// Route::post('hotel/save', 'HotelController@store');
// Route::get('hotel/{id}', 'HotelController@show');
// Route::get('hotel/update', 'HotelController@update');
// Route::get('hotel/delete/{id}', 'HotelController@delete');
