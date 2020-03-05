<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    //
    protected $softDelete = true;
    public function student(){
        return $this->belongsTo('App/Student','student_id','id');
    }
}
