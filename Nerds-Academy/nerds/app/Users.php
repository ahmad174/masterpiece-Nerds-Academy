<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{   
    public function comments()
    {
        return $this->hasMany('App\Comments', 'user_id');
    }
    
    public function courses()
    {
        return $this->hasMany('App\Courses', 'user_id');
    }

    public function major()
    {
        return $this->belongsTo('App\Majors');
    }
}


