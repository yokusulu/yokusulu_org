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

Route::get('/', function () {    return view('welcome');});
Route::get('sample', 'SamplesController@index');
// 会員登録画面
Route::get('member', 'MembersController@index');
// 会員登録・確認画面
Route::any('member/check', 'MembersController@check');
// 会員登録・登録完了画面
Route::any('member/check/done', 'MembersController@check');

