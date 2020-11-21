<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{ protected $fillable=['advisor_id', 'company_id','department_id','duration_id','status'];
    public function advisor(){
        return $this->belongsTo('App\Advisor');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function duration(){
        return $this->belongsTo('App\Duration');
    }
}
