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




Route::get('/', 'HomeController@index')                                         ->name('home');
Route::get('info/{info}','Info\InfoController@index')                           ->name('info');
Route::group([
    'namespace' => 'Auth',
    'prefix'    => 'auth',
    'as'        => 'auth.'
],function(){
    Route::get('signin','SigninController@index')                               ->name('signin');
    Route::post('signin','SigninController@signin')                             ->name('signin:action');
    Route::get('signout','SignoutController@signout')                           ->name('signout:action');

});
Route::group([
    'namespace' => 'UserCenter',
    'prefix'    => 'usercenter',
    'as'        => 'usercenter.'
],function(){
    Route::get('index','UserCenterController@index')                            ->name('index');
    Route::post('cgpassword','UserCenterController@cgpassword')                 ->name('cgpassword');
    Route::post('cgemail','UserCenterController@cgemail')                       ->name('cgemail');
});
Route::group([
    'namespace' => 'Grow',
    'prefix'    => 'grow',
    'as'        => 'grow.'
],function(){
    Route::get('index','GrowController@index')                                  ->name('index');
});
Route::group([
    'namespace' => 'Doc',
    'prefix'    => 'doc',
    'as'        => 'doc.'
],function(){
    Route::get('index','DocController@index')                                  ->name('index');
});
