<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_coordinator extends Model
{
    //
    public function company(){
        return $this->belongsTo('App/Company');
    }
    public function user(){
        return $this->hasone('App/User','user_id','id');
    }

}
