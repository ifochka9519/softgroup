<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
	public function stage()
	{
		return $this->belongsTo('App\Stage');
    }

	public function country()
	{
		return $this->belongsTo('App\Country');
    }

	public function president()
	{
		return $this->belongsTo('App\President');
    }

	public function trophies()
	{
		return $this->belongsToMany('App\Trophy', 'club_trophies', 'club_id', 'trophy_id')->withTimestamps();

	}

	public function leagues()
	{
		return $this->belongsToMany('App\League', 'club_leagues', 'club_id', 'league_id')->withTimestamps();

	}

}
