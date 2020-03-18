<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniCoordiantor extends Model
{
    protected $fillable = ['name','email','password','sex'];

    public function users(){
        return $this->hasone('App\User');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }
    
}
