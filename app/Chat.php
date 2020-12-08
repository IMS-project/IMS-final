<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function sender(){
        return $this->belongsTo('App\User');
    }
    public function receiver(){
        return $this->belongsTo('App\User');
    }
}