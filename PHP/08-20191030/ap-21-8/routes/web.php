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

Route::get('/php01', 'Controller@php01');
Route::get('/php02', 'Controller@php02');
Route::get('/php03', 'Controller@php03');
Route::get('/php04', 'Controller@php04');
Route::get('/php05', 'Controller@php05');
Route::get('/php06', 'Controller@php06');

Route::get('/hienThiBaiViet/{id}','Controller@hienthibaiviet');