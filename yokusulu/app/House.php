<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class House extends Model
{
    private $house = 'houses';
    //
    // public function __construct()
    // {
    //     $this->$foo = TRUE;

    //     echo($this->$foo);
    // }

    public static function get_data($house_id) {
    	// $data = new House;
    	 var_dump($this); die;
    	// var_dump($this->$house); die;
    $house_data = DB::table($house)->join('detail_houses', 'houses.id', '=', 'detail_houses.houses_id')->distinct()->get();
    var_dump($house_data); die;
   	 return $house;
    }

    // public static function a() {
    // 	echo '成功'; die;
    // 	 return $house;
    // }
}
