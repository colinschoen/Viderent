<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ["as" => "index", "uses" => 'IndexController@get_index']);
Route::get('admin/login', ["as" => "adminlogin", "uses" => 'IndexController@get_admin_login']);
Route::post('admin/login', ["as" => "doadminlogin", "uses" => 'IndexController@post_admin_login']);
Route::get('admin/hash/{string}', ["as" => "hash", "uses" => "IndexController@get_hash"]);


Route::get('admin', ["as" => "admin", "uses" => 'IndexController@get_admin', "middleware" => "auth"]);
Route::get('admin/logout', ["as" => "doadminlogout", "uses" => 'IndexController@get_admin_logout', "middleware" => "auth"]);

Route::post('admin/save/partners', ["as" => "adminsavepartners", "uses" => "IndexController@post_admin_save_partners", "middleware" => "auth"]);
Route::post('admin/save/clients', ["as" => "adminsaveclients", "uses" => "IndexController@post_admin_save_clients", "middleware" => "auth"]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
