<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{ protected $fillable=['advisor_id', 'company_id','department_id','duration_id','status'];
    public function advisor(){
        return $this->belongsTo('App\Advisor');
    }
    public function placement(){
        return $this->belongsTo('App\placement');
    }
   
}
