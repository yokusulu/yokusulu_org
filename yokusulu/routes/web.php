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
// 会員情報編集画面
Route::any('/mypage/myinfo/edit', 'MypagesController@myinfo_edit');
// 会員情報編集確認画面
Route::any('/mypage/myinfo/edit/check', 'MypagesController@myinfo_edit_check');
// 会員情報編集完了画面
Route::any('/mypage/myinfo/edit/done', 'MypagesController@myinfo_edit_done');
