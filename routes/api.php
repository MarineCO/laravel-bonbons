<?php

use Illuminate\Http\Request;
use App\Sweet;

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

Route::get('/', function() {
	return response()->json(Sweet::all());
});

Route::post('/less/{id}', function($id) {
	$sweets = Sweet::find($id);
	$sweets->qty--;
	$sweets->save();

	return $sweets->qty;
});

Route::post('/more/{id}', function($id) {
	$sweets = Sweet::find($id);
	$sweets->qty++;
	$sweets->save();

	return $sweets->qty;
});
