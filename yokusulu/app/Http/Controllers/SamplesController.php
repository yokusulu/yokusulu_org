<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamplesController extends Controller
{
	public function index() {
		$title = 'ヨクスル';
		return view("samples", compact('title'));
	}
}
