<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function supervisor(){
        return $this->belongsTo('App\Supervisor');
    }

}
