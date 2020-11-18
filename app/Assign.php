<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    public function advisor(){
        return $this->belongsTo('App\Advisor');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
