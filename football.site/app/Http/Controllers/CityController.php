<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Http\Requests\CityRequest;

class CityController extends Controller
{
	public function createCity(CityRequest $request)
	{
		$city = new City();
		$country = Country::find($request['country']);
		$city->name = $request['name'];
		$country->cities()->save($city);


		$city->save();
		return redirect()->back();

    }

	public function newCity()
	{
		$countries = Country::all();
		return view('new_city')->with('countries',$countries);
	}
}
