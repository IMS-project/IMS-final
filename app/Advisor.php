<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advisor extends Model
{
    //
    protected $softDelete = true;
    public function university(){
        return $this->belongsTo('App/University');
    }
    public function student(){
        return $this->hasMany('App/Student');
    }
    public function user(){
        return $this->belongsTo('App/User');
    }
}
