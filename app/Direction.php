<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
	protected $table = 'directions';

    // Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
    }
    // Relación de Muchos a Uno
	public function commune(){
		return $this->belongsTo('App\Commune', 'commune_id');
	}
}
