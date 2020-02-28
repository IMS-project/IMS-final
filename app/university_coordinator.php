<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University_coordinator extends Model
{
    //
    public function users(){
        return $this->hasone('App\User');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }
}
