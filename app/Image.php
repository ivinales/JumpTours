<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = 'images';

    // Relación de Muchos a Uno
	public function business(){
		return $this->belongsTo('App\Business', 'business_id');
	}
    // Relación uno a mucho / One To Many 
	public function likes(){
		return $this->hasMany('App\Like');
    }
    // Relación uno a mucho / One To Many 
	public function comments(){
		return $this->hasMany('App\Comment');
	}
}
