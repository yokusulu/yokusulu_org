<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
	public static function search_house_id($input) {

		$query = new House;

		// 都道府県入力がされていた場合
		if (isset($input["prefecture"])) {
			$query = $query->where('prefecture', '=', $input["prefecture"]);
		}
		// 金額入力がされていた場合
		if (isset($input["price"])) {
			$query = $query->where('price', '=', $input["price"]);
		}
		// 配列で値を取得して整形
		$res = $query->select('id')->get()->toArray();
		$house_ids = array_column($res, 'id');
		return $house_ids;
	}

	public static function get_house_data($house_ids) {

		$query = new House;
		// お好きなデータを取ってくる。
		$house_datas = $query->select('id','name','price')->whereIn('id', $house_ids)->get()->toArray();
		return $house_datas;
	}
}
