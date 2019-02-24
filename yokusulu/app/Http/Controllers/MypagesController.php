<?php

namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Validation\Rule;
use App\User;
class MypagesController extends Controller {

	// マイページTOP画面
	public function index () {
		$title = 'ヨクスル';
		return view("mypage.index", compact('title'));
	}
	// 会員情報TOP画面
	public function myinfo () {
		//authからデータ取れるまでは仮で配列に値を当て込んておく。
		$login_info["name"] = "a";
		$login_info["email"] = "abc@gmail.com";
		return view("mypage.myinfo.index", compact('login_info'));
	}
	// 会員情報編集画面
	public function myinfo_edit () {
		//authからデータ取れるまでは仮で配列に値を当て込んておく。
		$login_info["name"] = "a";
		$login_info["email"] = "abc@gmail.com";
		$login_info["password"] = "shun0626";
		return view("mypage.myinfo.edit", compact('login_info'));
	}
	// 会員情報編集確認画面
	public function myinfo_edit_check (request $request) {
		$input_data = $request->all();
		// バリデーション確認
		$validator = $this->user_validate($input_data);
		// バリデーションエラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/myinfo/edit')->withErrors($validator)->withInput();
		}
		return view("mypage.myinfo.check", compact('input_data'));
	}
	// 会員情報編集登録完了画面
	public function myinfo_edit_done (request $request) {
		$input_data = $request->all();
		// バリデーション確認
		$validator = $this->user_confirm_validate($input_data);
		// バリデーションエラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/myinfo/edit')->withErrors($validator)->withInput();
		}
		// ユーザー情報を変更する。
		User::update_login_user($input_data);
		// 二重登録防止
		$request->session()->regenerateToken();
		return view("mypage.myinfo.done");
	}
	// 会員情報バリデーション
	public function user_validate ($inputdata) {
		// バリデーションルール
		$validator = Validator::make($inputdata, [
		'name' => 'required|max:50',
		'email' => 'required|email',
		// ハッシュ化させたinputデータを入れる
		'password_old' => [
		'required', Rule::in(['aaaaaaaa']),
		],
		'password_new' => 'alpha_num|confirmed|min:8|max:16',
	]);
		return $validator;
	}
	// 会員情報(確認用)バリデーション
	public function user_confirm_validate ($inputdata) {
		// バリデーションルール
		$validator = Validator::make($inputdata, [
		'name' => 'required|max:50',
		'email' => 'required|email',
		'password' => 'alpha_num|min:8|max:16',
	]);
		return $validator;
	}
}