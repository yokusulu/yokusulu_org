<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;


class SearchController extends Controller
{
    //
    protected $members;

    public function __construct()
    {
        $this->houses = new House();
    }

    public function detail_index() {
        $houses = $this->houses->all();
        foreach ($houses as $house){
            echo $house -> name;
        }

        return view("search/detail/index")->with([
        ]);
    }


}
