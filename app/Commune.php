<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
	protected $table = 'communes';

    // Relación de Muchos a Uno
	public function region(){
		return $this->belongsTo('App\Region', 'region_id');
    }
   // Relación de uno a muchos
	public function direction(){
		return $this->hasMany('App\Direction');
	}
}
