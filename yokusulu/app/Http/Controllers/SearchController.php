<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function detail_index() {

        $title = 'ヨクスル';
        return view("search/detail/index");
    }
}
