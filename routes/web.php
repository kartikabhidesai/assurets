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


Route::match(['get','post'],'/services',(['as'=>'services','uses'=>'admin\ServiceController@services']));
Route::match(['get','post'],'/addservice',(['as'=>'addservice','uses'=>'admin\ServiceController@addservice']));
Route::match(['get','post'],'/deleteservice/{id}',(['as'=>'deleteservice','uses'=>'admin\ServiceController@deleteservice']));
Route::match(['get','post'],'/editservice/{id}',(['as'=>'editservice','uses'=>'admin\ServiceController@editservice']));


Route::match(['get','post'],'/company-dashboard',(['as'=>'dashboard','uses'=>'admin\LoginController@companydashboard']));
Route::match(['get','post'],'/company-list',(['as'=>'company-list','uses'=>'company\CompanyController@companylist']));

Route::match(['get','post'],'/',(['as'=>'index','uses'=>'front\MainController@index']));
Route::match(['get','post'],'/service',(['as'=>'service','uses'=>'front\MainController@service']));
Route::match(['get','post'],'/work',(['as'=>'work','uses'=>'front\MainController@work']));
Route::match(['get','post'],'/about',(['as'=>'about','uses'=>'front\MainController@about']));
Route::match(['get','post'],'/blog',(['as'=>'blog','uses'=>'front\MainController@blog']));
Route::match(['get','post'],'/contact',(['as'=>'contact','uses'=>'front\MainController@contact']));

Route::match(['get','post'],'/api/login',(['as'=>'api-login','uses'=>'api\APIController@login']));