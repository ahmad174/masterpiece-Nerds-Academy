<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Users', 'user_id');
    }

    
    public function course()
    {
        return $this->belongsTo('App\Courses', 'course_id');
    }
}
