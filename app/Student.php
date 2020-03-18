<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //


    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function university(){
        return $this->belongsTo('App\University');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
