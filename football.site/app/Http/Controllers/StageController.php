<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\StageRequest;
use App\Stage;

class StageController extends Controller
{
	public function createStage(StageRequest $request)
	{
		$stage = new Stage();
		$city = City::find($request['city']);
		$stage->name = $request['name'];
		$stage->founded = $request['founded'];
		$stage->capacity = $request['capacity'];
		$city->stages()->save($stage);

		$stage->save();
		return redirect('stages');
	}

	public function newStage()
	{
		$cities = City::all();
		return view('new_stage')->with('cities',$cities);
	}

	public function all()
	{
		$stages = Stage::all();
		return view('stages')->with('stages',$stages);
	}

	public function sort()
	{
		$stages = Stage::orderBy('name')->get();
		return view('stages')->with('stages',$stages);
	}

	public function about($id)
	{
		$stage = Stage::find($id);
		$city = $stage->city;
		$clubs = $stage->clubs;
		return view('stage')->with(['stage'=>$stage, 'city'=>$city, 'clubs'=>$clubs]);
	}

	public function delete(Stage $stage)
	{
		$stage->delete();
		return redirect('stages');
	}
}
