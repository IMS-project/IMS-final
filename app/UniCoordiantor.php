<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniCoordiantor extends Model
{
    protected $fillable = ['name','email','password','sex'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }
    
}
