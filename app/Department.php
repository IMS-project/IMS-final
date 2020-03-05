<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    //

    protected $softDelete = true;
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function student(){
        return $this->hasMany('App\Student');
    }
}
