<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;

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
		if ($request->path() == "member/check") {
		return view("member.check", compact('input_values'));
		}
		if ($request->path() == "member/check/done") {
		$input_values = $request->all();
		// Userテーブルに登録をする。
		User::user_data_insert($input_values);
		return view("member.done", compact('input_values'));
		}
	}

	public function member_validate($request) {

		// 入力チェック
		$validator = Validator::make($request->all(), [
			'name' => 'required|max:50',
			'email' => 'required|unique:users,email|email|max:100',
			'password' => 'required|between:8,16|alpha_num|confirmed',
			'password_confirmation' => 'required',
		]);

		return $validator;
	}
}
