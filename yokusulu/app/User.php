<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public static function user_data_insert($post) {
		$user = new \App\User;
		// 挿入データをまとめる。
		$user->name = $post["name"];
		$user->email = $post["email"];
		$user->password = Hash::make($post["password"]);
		return $user->save();
	}
}
