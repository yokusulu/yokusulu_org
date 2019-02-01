<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

	public static function user_data_insert($post) {
		$user = new \App\User;
		$user->name = $post["name"];
		$user->email = $post["email"];
		$user->password = $post["password"];
		return $user->save();
	}
}
