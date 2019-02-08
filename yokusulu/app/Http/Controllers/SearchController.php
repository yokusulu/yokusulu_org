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
        $budget    = $_POST['budget'];
        return view('search.index',compact('prefecture','budget'));
    }
}
