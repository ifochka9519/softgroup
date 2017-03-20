<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeagueRequest;
use App\League;
use App\President;

class LeagueController extends Controller
{
	public function createLeague(LeagueRequest $request)
	{
		$league = new League();
		$president = President::find($request['president']);
		$league->name = $request['name'];
		$league->place = $request['place'];
		$president->leagues()->save($league);

		$league->save();
		return redirect('leagues');
	}

	public function newLeague()
	{
		$presidents = President::all();
		return view('new_league')->with('presidents',$presidents);
	}

	public function all()
	{
		$leagues = League::all();
		return view('leagues')->with('leagues',$leagues);
	}

	public function sort()
	{
		$leagues = League::orderBy('name')->get();
		return view('leagues')->with('leagues',$leagues);
	}

	public function about($id)
	{
		$league = League::find($id);
		$president = $league->president;
		$clubs = $league->clubs;
		return view('league')->with(['league'=>$league, 'president'=>$president, 'clubs'=>$clubs]);
	}

	public function delete(League $league)
	{
		$league->delete();
		return redirect('leagues');
	}
}
