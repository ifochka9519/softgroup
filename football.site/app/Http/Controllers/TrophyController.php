<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrophyRequest;
use App\Trophy;

class TrophyController extends Controller
{
	public function createTrophy(TrophyRequest $request)
	{
		$trophy = new Trophy();
		$trophy->name = $request['name'];
		$trophy->founded = $request['founded'];

		$trophy->save();

		return redirect('trophies');
	}

	public function newTrophy()
	{
		return view('new_trophy');
	}

	public function all()
	{
		$trophies = Trophy::all();
		return view('trophies')->with('trophies',$trophies);
	}

	public function sort()
	{
		$trophies = Trophy::orderBy('name')->get();
		return view('trophies')->with('trophies',$trophies);
	}

	public function about($id)
	{
		$trophy = Trophy::find($id);
		$clubs = $trophy->clubs;
		return view('trophy')->with(['trophy'=>$trophy, 'clubs'=>$clubs]);
	}

	public function delete(Trophy $trophy)
	{
		$trophy->delete();
		return redirect('trophies');
	}
}
