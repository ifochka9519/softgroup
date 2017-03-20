<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
	public function leagues()
	{
		return $this->hasMany('App\League');
    }

	public function clubs()
	{
		return $this->hasMany('App\Club');
    }
}
