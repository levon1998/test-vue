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

Route::get('/auth', function () {
    return view('welcome');
});

Route::get('/private', function () {
    return view('welcome');
})->middleware('access.to.private.page');

Route::post('/check-password', "PrivatePageController@checkPassword");
Route::post('/check-access', "PrivatePageController@checkAccess");
