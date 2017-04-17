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




Route::get('/', 'HomeController@index')  ->name('home');
Route::group([
    'namespace' => 'Auth',
    'prefix'    => 'auth',
    'as'        => 'auth.'
],function(){
    Route::get('signin','SigninController@index')    ->name('signin');
    Route::post('signin','SigninController@signin')    ->name('signin:action');
    Route::get('signout','SignoutController@signout')    ->name('signout:action');

});
