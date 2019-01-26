<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $prefecture = $_POST['prefecture'];
        $checkin    = $_POST['checkin'];
        $checkout   = $_POST['checkout'];
        return view('search.index',conpact('prefecture','checkin','checkout'));
    }
}
