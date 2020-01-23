<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    protected $primaryKey = 'id';

    public function parent()
    {
        return $this->belongsTo('App\Majors', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Majors', 'parent_id');
    }

    public function users()
    {
        return $this->hasMany('App\Users', 'user_id');
    }

    public function courses()
    {
        return $this->hasMany('App\Courses','major_id');
    }
}
