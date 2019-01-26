<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    /**
     * 検索結果を表示する。
     *
     * @return \search\index
     */
    public function index(Request $request)
    {
        $prefecture = $_POST['prefecture'];
        $checkin    = $_POST['checkin'];
        $checkout   = $_POST['checkout'];
        return view('search.index',compact('prefecture','checkin','checkout'));
    }
}
