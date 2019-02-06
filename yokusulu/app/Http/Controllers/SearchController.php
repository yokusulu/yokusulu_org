<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\House;


class SearchController extends Controller
{
    //
    // protected $members;

     public function __construct()
     {
         $this->houses = new House();
     }

    public function detail_index()
    {
//        $house_id = "1";
//        $house_data = new House;
//        $house_data->get_data();
//        var_dump($house_data);

        // Frameworksモデルのインスタンス化
        $md = new House();
        // データ取得
        $data = $md->get_data();

        // ビューを返す
        return view('search.detail.index', ['data' => $data]);

//        return view("search.detail.index")->with('house_data', $house_data);
    }
}
