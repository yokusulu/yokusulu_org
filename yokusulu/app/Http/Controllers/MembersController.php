<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;

class MembersController extends Controller
{
	public function index() {
		return view("member.index"//, compact('title')
					);
	}

	public function check(Request $request) {
		$validatedData = $request->validate([
			'name' => 'required',
		]);
		// $all = Request::all();
		// var_dump($validatedData); die;
		$validatedData = $request->validate();
		// var_dump($validatedData); die;
		return view("member.check"//, compact('title')
					);
	}
}
