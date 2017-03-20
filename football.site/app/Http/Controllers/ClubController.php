<?php

namespace App\Http\Controllers;

use App\Club;
use App\Country;
use App\Http\Requests\ClubRequest;
use App\League;
use App\President;
use App\Stage;
use App\Trophy;
use Illuminate\Http\Request;

class ClubController extends Controller
{
	public function createClub(ClubRequest $request)
	{
		$club = new Club();
		$president = President::find($request['president']);
		$stage = Stage::find($request['stage']);
		$country = Country::find($request['country']);
		$club->name = $request['name'];
		$club->founded = $request['founded'];
		$club->revenue = $request['revenue'];
		$club->president_id = $request['president'];
		$club->stage_id = $request['stage'];
		$club->country_id = $request['country'];
		$president->clubs()->save($club);
		$stage->clubs()->save($club);
		$country->clubs()->save($club);

		$club->save();

		return redirect('clubs');
	}

	public function newClub()
	{
		$countries = Country::all();
		$presidents = President::all();
		$stages = Stage::all();
		return view('new_club')->with(['countries'=>$countries, 'presidents'=>$presidents, 'stages'=>$stages]);
	}

	public function about($id)
	{
		$club = Club::find($id);
		$stage = $club->stage->name;
		$country = $club->country->name;
		$president = $club->president->name;
		$trophies = $club->trophies;
		$leagues = $club->leagues;
		return view('club')->with(['club'=>$club, 'stage'=>$stage, 'country'=>$country, 'president' =>$president, 'trophies'=>$trophies, 'leagues'=>$leagues] );
	}

	public function all()
	{
		$clubs = Club::all();
		return view('clubs')->with('clubs',$clubs);
	}

	public function sort()
	{
		$clubs = Club::orderBy('name')->get();
		return view('clubs')->with('clubs',$clubs);
	}


	public function newClubLeague()
	{
		$clubs = Club::all();
		$leagues = League::all();
		return view('new_club_league')->with(['clubs'=>$clubs, 'leagues'=>$leagues]);
	}

	public function createClubLeague(Request $request)
	{
		$club = Club::find($request['club']);
		$club->leagues()->attach($request['league']);
		return redirect()->back();
	}
	public function newClubTrophy()
	{
		$clubs = Club::all();
		$trophies = Trophy::all();
		return view('new_club_trophy')->with(['clubs'=>$clubs, 'trophies'=>$trophies]);
	}

	public function createClubTrophy(Request $request)
	{
		$club = Club::find($request['club']);
		$club->trophies()->attach($request['trophy']);
		return redirect()->back();;
	}


	public function delete(Club $club)
	{
		$club->delete();
		return redirect('clubs');
	}
}
