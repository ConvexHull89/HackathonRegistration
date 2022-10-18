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
    public function members(){
        return $this->hasMany('App\Member');
    }
    protected $fillable = [
        'type','team_name', 'password', 'fullname', 'email_leader', 'wa_num' , 'line_id', 'github', 'birth_place' , 'birth_day', 'card', 'cv', 'payment_confirmation', 'payment', 'early'
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

}
