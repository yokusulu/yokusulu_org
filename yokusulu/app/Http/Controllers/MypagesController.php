<?php

namespace App\Http\Controllers;

// use Request;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use App\Host_user;
use App\House;

class MypagesController extends Controller {

	// マイページ TOP画面
	public function index () {
		$title = 'ヨクスル';
		// @todo 会員情報＋ホストユーザーか判定するデータを取得する
		// ホストユーザー判定をつくり、ホストになる使えるかどうかの機能を作成する
		return view("mypage.index", compact('title'));
	}

	// 会員情報 TOP画面
	public function myinfo () {
		//authからデータ取れるまでは仮で配列に値を当て込んておく。
		$login_info["name"] = "a";
		$login_info["email"] = "abc@gmail.com";
		return view("mypage.myinfo.index", compact('login_info'));
	}

	// 会員情報 編集画面
	public function myinfo_edit () {
		//authからデータ取れるまでは仮で配列に値を当て込んておく。
		$login_info["name"] = "a";
		$login_info["email"] = "abc@gmail.com";
		$login_info["password"] = "shun0626";
		return view("mypage.myinfo.edit", compact('login_info'));
	}

	// 会員情報 編集確認画面
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

	// 会員情報 編集登録完了画面
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

	// 会員情報 バリデーション
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

	// 会員情報(確認用) バリデーション
	public function user_confirm_validate ($inputdata) {
		// バリデーションルール
		$validator = Validator::make($inputdata, [
		'name' => 'required|max:50',
		'email' => 'required|email',
		'password' => 'alpha_num|min:8|max:16',
	]);
		return $validator;
	}

	// ホストになる TOP画面
	public function behost () {
		//authからデータ取れるまでは仮で配列に値を当て込んておく。
		$login_info["name"] = "a";
		$login_info["email"] = "abc@gmail.com";
		return view("mypage.behost.index", compact('login_info'));
	}

	// ホストになる 確認画面
	public function behost_check (request $request) {
		// 入力データを取得する。
		$input = $request->all();
		// 入力値確認
		$validator = $this->behost_validate($input);
		// エラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/behost')->withErrors($validator)->withInput();
		}
		// エラーがなければ、データ挿入用にデータを整形する
		// $input["phone"] = $input["phone1"].$input["phone2"].$input["phone3"];
		// $input["zip"] = $input["zip1"].$input["zip2"];
			return view("mypage.behost.check", compact('input'));
	}

	// ホストになる 確認画面
	public function behost_check_done (request $request) {
		// 入力データを取得する。
		$input = $request->all();
		// 入力値確認(hidden値を上書かれたときのため)
		$validator = $this->behost_validate($input);
		// エラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/behost')->withErrors($validator)->withInput();
		}
		// エラーがなければ、データ挿入用にデータを整形する
		$input["phone"]    = $input["phone1"].$input["phone2"].$input["phone3"];
		$input["zip"]      = $input["zip1"].$input["zip2"];
		$input["login_id"] = 1; // 仮で数字をいれておく。
		// データを挿入する。
		Host_user::insert_host_user($input);

		return view("mypage.behost.done", compact('input'));
	}

	// ホストになる バリデーション
	public function behost_validate ($input) {
		// バリデーションルール
		$validator = Validator::make($input, [
		'phone1'      => 'required|regex:/[0-9]{1,3}+$/',
		'phone2'      => 'required|regex:/[0-9]{1,4}+$/',
		'phone3'      => 'required|regex:/[0-9]{1,4}+$/',
		'zip1'        => 'required|regex:/[0-9]{3}+$/',
		'zip2'        => 'required|regex:/[0-9]{4}+$/',
		'prefecture'  => 'required',
		'city'        => 'required|between:1,30',
		'ward'        => 'required|between:1,30',
		'address'     => 'required|between:1,30',
	]);
		return $validator;
	}

	// 家貸出メニュー TOP画面
	public function myhouse (request $request) {
		// ログイン情報を取得する。一旦は仮
		$login["id"] = 5;
		// ログインIDに紐づく家情報を取得する。
		$houses = House::get_myhouse($login);
		return view("mypage.myhouse.index", compact('houses'));
	}
}