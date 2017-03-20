<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\CountryRequest;

class CountryController extends Controller
{
	public function createCountry(CountryRequest $request)
	{
		$name = $request['name'];
		$country = new Country();
		$country->name = $name;

		$country->save();

		return redirect()->back();
    }

	public function newCountry()
	{
		return view('new_country');
    }
}
