<?php

namespace App\Http\Controllers;

use App\Http\Requests\PresidentRequest;
use App\President;

class PresidentController extends Controller
{
	public function createPresident(PresidentRequest $request)
	{
		$name = $request['name'];
		$president = new President();
		$president->name = $name;

		$president->save();

		return redirect()->back();
	}

	public function newPresident()
	{
		return view('new_president');
	}
}
