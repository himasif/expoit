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

Route::get('/', 'HomeController@index');
Auth::routes();

Route::post('/register-participant', 'RegistrantController@registerParticipant');
Route::post('/register-company', 'RegistrantController@registerCompany');

Route::redirect('/admin', '/admin/dashboard');
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/company', 'AdminController@companyParticipant');
    Route::get('/participant', 'AdminController@expoParticipant');

    Route::get('/ajax/participant', 'AdminController@getAjaxParticipant');
    Route::get('/ajax/company', 'AdminController@getAjaxCompany');
});