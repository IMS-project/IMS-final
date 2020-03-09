<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University_coordinator extends Model
{
    //
    protected $softDelete = true;
    public function users(){
        return $this->hasone('App\User');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }
}
