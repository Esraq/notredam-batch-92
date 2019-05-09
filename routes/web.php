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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::Resource('/','MemberRegistrationController');

Route::Resource('site','MemberRegistrationController');

Route::Resource('registration-list','Admin\AdminRegisterController');


Route::Resource('profile','UserProfileController');

Route::group(['middleware' => ['auth', 'admin']], function() {


    Route::get('user_list', 'Admin\AdminUserController@index');






    // your routes
});
