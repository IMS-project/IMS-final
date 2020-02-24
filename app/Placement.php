<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    //
    public function student(){
        return $this->belongsTo('App\Student', 'company_id', 'id');
    }
}
