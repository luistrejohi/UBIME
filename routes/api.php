<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
  Route::post('details', 'API\UserController@details');
});
//Entidades
Route::resource('pulsera','PulseraController');
Route::resource('pay_module', 'Pay_moduleController');
//Relaciones
Route::resource('pulsera_user', 'Pulsera_userController');
Route::resource('user_payment', 'User_paymentController');
Route::resource('user_transport_ubication', 'User_transport_ubicationController');
