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


Route::middleware('cors')->get('/articles', function(){
	return response()->json([
		'book' => 'Crime and Punishment',
		'published_at' => '1886',
		'writer' => 'Fyodor Mihailovic Dostoyevsky'
	]);
});