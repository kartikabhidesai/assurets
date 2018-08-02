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



Route::match(['get','post'],'/register',(['as'=>'register','uses'=>'admin\LoginController@register']));
Route::match(['get','post'],'/login',(['as'=>'login','uses'=>'admin\LoginController@login']));
Route::match(['get','post'],'/dashboard',(['as'=>'dashboard','uses'=>'admin\LoginController@dashboard']));
Route::match(['get','post'],'/userlist',(['as'=>'userlist','uses'=>'admin\LoginController@userlist']));
Route::match(['get'],'/delete/{id}',(['as'=>'delete','uses'=>'admin\LoginController@delete']));
Route::match(['get','post'],'/userform',(['as'=>'userform','uses'=>'admin\LoginController@userform']));
Route::match(['get','post'],'/edituser/{id}',(['as'=>'edituser','uses'=>'admin\LoginController@edituser']));