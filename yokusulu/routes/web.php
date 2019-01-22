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
// Mypageトップ画面
Route::any('/mypage', 'MypagesController@index');
// 会員情報トップ画面
Route::any('/mypage/myinfo', 'MypagesController@myinfo');
// 会員情報トップ画面
Route::post('/mypage/myinfo/edit', 'MypagesController@myinfo_edit');
