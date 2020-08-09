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

Route::get('/home','EmployeeController@view');

Route::post('/insert','EmployeeController@insert');

Route::get('/update/{id}','EmployeeController@update');

Route::post('updateProcess','EmployeeController@updatePost');

Route::get('delete/{id}','EmployeeController@delete');

Route::get('/search',function () {
    return view('search');
});

Route::post('/search','EmployeeController@search');
