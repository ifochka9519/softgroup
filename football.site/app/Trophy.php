<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{


	public function clubs()
	{
		return $this->belongsToMany('App\Club', 'club_trophies', 'club_id', 'id');
	}
}
