<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/v1/user/create', 'MemberController@create');
Route::post('/v1/user/create', 'MemberController@create1');

Route::get('/v1/user/delete', 'MemberController@delete');
Route::delete('/v1/user/delete/{member}', 'MemberController@destroy');

Route::get('/v1/user/pwd/change', 'MemberController@change');
Route::patch('/v1/user/pwd/change/{member}', 'MemberController@change1');

Route::get('/v1/user/login', 'MemberController@login');