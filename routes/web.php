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
    return view('welcome');
});

Route::get('/api/get/user_all', 'BaseController@getAllUser');

Route::get('/api/get/address_all', 'BaseController@getAllUserAddress');

Route::get('/api/get/contact_all', 'BaseController@getAllUserContact');

Route::get('/api/get/area_code_all', 'BaseController@getAllAreaCode');

Route::get('/api/get/user_info/{id}', 'UserController@getUserInfo');

Route::get('/api/get/user_contact/{id}', 'ContactController@getUserContact');

Route::get('/api/get/user_address/{id}', 'AddressController@getUserAddress');