<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comp_coordinator extends Model
{
    protected $fillable = ['user_id','company_id'];


    public function company(){    
        return $this->belongsTo('App\Company');
    }
}
