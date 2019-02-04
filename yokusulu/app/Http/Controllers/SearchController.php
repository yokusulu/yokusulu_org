<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index() {
	// てきとーに入ってくるデータを仮定。
	$input["prefecture"] = "東京都";
	$input["price"] = "10000";
	// Modelで検索値からhouseのidを取得。
	$house_ids = House::search_house_id($input);
	// 取得したidから詳細情報を取得する。
	$house_datas = House::get_house_data($house_ids);
	return view("search/index", compact('house_datas'));
	}
}
