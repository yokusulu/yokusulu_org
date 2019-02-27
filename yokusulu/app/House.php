<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class House extends Model
{
	const TABLE_NAME = 'houses';

	public static function get_myhouse($login) {
		$res = DB::table(self::TABLE_NAME)->where('users_id', $login["id"])->get();
		return $res;
	}
}
