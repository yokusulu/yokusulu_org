<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

const TABLE_NAME = 'host_user';

class Host_user extends Model
{
	public static function insert_host_user($input) {
		$query = new self;
		// レコードを更新するためにデータを纏める。
		$query->users_id = $input["login_id"];
		$query->phone = $input["phone"];
		$query->zip   = $input["zip"];
		$query->prefecture   = $input["prefecture"];
		$query->city   = $input["city"];
		$query->ward   = $input["ward"];
		$query->address   = $input["address"];
		// データ更新
		$res = $query->save();
		return $res;
	}
}
