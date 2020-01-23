<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{


    public function user()
    {
        return $this->belongsTo('App\Users', 'users_id');
    }


    public function majors()
    {
        return $this->belongsToMany('App\Majors');
    }

    public function comments()
    {
        return $this->hasMany('App\comments', 'course_id');
    }

}


