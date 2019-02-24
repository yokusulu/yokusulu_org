<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

	public static function update_login_user($input_data) {
		$query = new self;
		// 更新するidをセットする
		$query = $query->where('id', 13);
		// レコードを更新する
		$res = $query->update(
			['name' => $input_data['name'],
			'email' => $input_data['email'],
			'password' => Hash::make($input_data['password']),]
		);
		// $query->name = $input_data['name'];
		// $query->email = $input_data['email'];
		// $query->password = Hash::make($input_data['password']);
		return $res;
	}
}
