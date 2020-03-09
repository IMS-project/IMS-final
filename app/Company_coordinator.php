<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_coordinator extends Model
{
    //
    protected $softDelete = true;
    public function company(){
        return $this->belongsTo('App/Company');
    }
    public function user(){
        return $this->hasone('App/User','user_id','id');
    }

}
