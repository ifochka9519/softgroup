<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
	public function president()
	{
		return $this->belongsTo('App\President');
    }

	public function clubs()
	{
		return $this->belongsToMany('App\Club', 'club_leagues', 'club_id', 'id');
	}
}
