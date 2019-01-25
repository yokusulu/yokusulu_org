<?php

namespace App\Http\Controllers;

use Request;

class MypagesController extends Controller {

	// マイページTOP画面
	public function index () {
		$title = 'ヨクスル';
		return view("mypage.index", compact('title'));
	}
	// 会員情報TOP画面
	public function myinfo () {
		$title = 'ヨクスル';
		return view("mypage.myinfo.index", compact('title'));
	}
	// 会員情報編集画面
	public function myinfo_edit () {
		var_dump('a'); die;
		return view("mypage.myinfo.edit", compact('title'));
	}
}