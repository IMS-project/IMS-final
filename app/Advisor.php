<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    //
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
