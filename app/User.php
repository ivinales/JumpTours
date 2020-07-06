<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profile_id','nombre','image','nick','apellido','email','fechaNacimiento','nacionalidad','telefono', 'password', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // Relación de uno a muchos
    public function business(){
		return $this->hasMany('App\Business');
    }
    // Relación de uno a muchos
    public function direction(){
		return $this->hasMany('App\Direction');
    }
    // Relación de Muchos a Uno
	public function profile(){
		return $this->belongsTo('App\Profile', 'profile_id');
	}
}
