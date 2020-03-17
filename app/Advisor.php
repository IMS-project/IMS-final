<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    
    public function users(){
        return $this->hasone('App\User');
    }
    public function university()
    {
        return $this->belongsTo(\App\Models\User::class, 'university_id');
    }

}

