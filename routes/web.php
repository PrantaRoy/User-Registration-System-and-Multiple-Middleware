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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['as'=>'admin.', 'prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']],function(){

    Route::get( '/dashboard','DashboardController@index')->name('dashboard');

} );



Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'user','middleware'=>
    ['auth','user']],function(){

    Route::get( '/dashboard','DashboardController@index')->name('dashboard');


} );
Route::get('/user/dashboard/password','Auth\ChangePasswordController@index')->name('change.password');
Route::post('/user/dashboard/password/update','Auth\ChangePasswordController@update')->name('update.password');