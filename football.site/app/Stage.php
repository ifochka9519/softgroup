<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
	public function clubs()
	{
		return $this->hasMany('App\Club');
    }

	public function city()
	{
		return $this->belongsTo('App\City');
    }
}
