<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index() {
		$title = 'ヨクスル';
		return view("search", compact('title'));
	}
}
