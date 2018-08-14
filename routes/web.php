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


Route::get('/', function(){
    $user = Auth::user();
    return view('welcome',compact('user'));
});

Auth::routes();
Route::get('/profile','profilesController@profile');
Route::post('/profile','UserProfileController@update_avatar');
Route::get('/task','TasksController@add');
Route::post('/task','TasksController@create');

Route::get('/task/{task}','TasksController@edit');
Route::post('/task/{task}','TasksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
