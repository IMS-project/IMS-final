<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Placement extends Model
{
    //
    protected $softDelete = true;
    public function student(){
        return $this->belongsTo('App\Student', 'company_id', 'id');
    }
}
