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

Route::get('/hien-thi-tat-ca','UserController@hienThiTatCa');
Route::get('/hien-thi-mot-nguoi/{id}','UserController@hienThiMotNguoi');
Route::get('/hien-thi-bang','UserController@hienThiBang');

