<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
// use Request;

class MembersController extends Controller
{
	public function index() {
		return view("member.index");
	}

	public function check(Request $request) {
		// 入力チェック
		$validator = $this->member_validate($request);
		// バリデーション失敗時はindexにリダイレクトする
		if ($validator->fails()) {
			return redirect('member')
					->withErrors($validator)
					->withInput();
		}
		// 確認画面へ配列として値を持っていく
		$input_values = $request->all();

		return view("member.check", compact('input_values'));
	}

	public function done(Request $request) {
		// hidden値の書き換わりを防ぐためにチェック
		$validator = $this->member_validate($request);
		// バリデーション失敗時はindexにリダイレクトする
		if ($validator->fails()) {
			return redirect('member')
					->withErrors($validator)
					->withInput();
		}
		$input_values = $request->all();
		// Userテーブルに登録をする。
		User::user_data_insert($input_values);
		return view("member.done");
	}

	public function member_validate($request) {

		// 入力チェック
		$validator = Validator::make($request->all(), [
			'name' => 'required|max:50',
			'email' => 'required|unique:users,email|email|max:100',
			'password' => 'required|between:8,16|alpha_num|regex:[0-9]|confirmed',
			'password_confirmation' => 'required',
		]);

		return $validator;
	}
}
