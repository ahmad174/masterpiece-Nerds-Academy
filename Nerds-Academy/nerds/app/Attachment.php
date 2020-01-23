<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function courses()
    {
        return $this->belongsTo('App\Courses', 'course_id');
    }

    
}
