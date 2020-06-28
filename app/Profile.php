<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table = 'profiles';

    // Relación de uno a muchos
    public function user(){
		return $this->hasMany('App\User');
    }
}
