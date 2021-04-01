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
    return view('auth.login');
});
Route::get('adminarae',function(){
    return view ('Pages.adminarea');
});
//system_user
Route::get('system_user', 'system_user@index');
Route::get('readsystem_user','system_user@readall');
Route::post('addsystem_user','system_user@insert');
Route::post('editsystem_user','system_user@edit');
Route::get('deletesystem_user/{id}','system_user@delete');
Route::get('activeuser/{id}','system_user@active_user');
Route::get('disactiveuser/{id}','system_user@disactive_user');
Route::get('getsystem_user/{id}','system_user@getsystem_user');

//story
Route::get('home', 'story@index');
Route::get('story', 'story@index');
Route::get('readstory','story@readall');
Route::post('addstory','story@insert');
Route::post('editstory','story@edit');
Route::get('getstory/{id}','story@getstory');
Route::get('deletestory','story@delete');
//level
Route::post('addlevel','level@insert');
Route::post('editlevel','level@edit');
Route::get('getlevel/{id}','level@getlevel');
Route::get('deletelevel','level@delete');
Route::get('level/{id}', 'level@index');
Route::get('readlevel/{id}','level@readall');
//login
Route::get('login', 'Main_controller@index');
Route::post('checklogin', 'Main_controller@checklogin');
Route::get('successlogin', 'Main_controller@successlogin');
Route::get('logoutadmin', 'Main_controller@logout');
//winner
Route::get('winner', 'winner@index');
Route::post('getwinner', 'winner@getwinner');
//active_level
Route::get('active_level', 'active_level@index');
Route::get('readactive_level','active_level@readall');
Route::post('editactive_level','active_level@edit');
Route::get('getactive_level/{id}','active_level@getactive_level');
