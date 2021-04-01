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

Route::middleware('auth:api', 'CORS')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_token','web_api@get_token');
Route::post('save_user','web_api@save_user');
Route::get('get_user','web_api@get_user');
Route::post('save_score','web_api@save_score');
Route::get('reload_data','web_api@reload_data');
