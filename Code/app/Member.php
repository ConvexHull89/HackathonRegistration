<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'user_id' ,'fullname', 'email_member', 'wa_num' , 'line_id', 'github', 'birth_place' , 'birth_day', 'card', 'cv'
    ];
}
