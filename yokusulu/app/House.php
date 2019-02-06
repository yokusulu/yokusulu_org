<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class House extends Model
{
    public $table = '';

    //
    public function __construct()
    {
        $this->table = "houses";
    }

    public function get_data()
    {
        $house_data = DB::table($this->table)->join(
            'detail_houses',
            'houses.id', '=',
            'detail_houses.houses_id'
        )->distinct()->get();
//        var_dump($house_data);
//        $house_arrayparams = array();
//    }
//
////        データ格納
//        $house_arrayparams['name'] = $name;
        return $house_data;
    }
}