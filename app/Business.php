<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
	protected $table = 'business';

    // Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
    }
    // Relación uno a mucho / One To Many 
	public function video(){
		return $this->hasMany('App\Video');
    }
    // Relación uno a mucho / One To Many 
	public function images(){
		return $this->hasMany('App\Image');
	}
}
