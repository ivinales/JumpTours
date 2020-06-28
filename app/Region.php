<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	protected $table = 'regions';

    // Relación de uno a muchos
	public function commune(){
		return $this->hasMany('App\Commune');
	}
}
