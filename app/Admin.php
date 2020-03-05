<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    //
    protected $softDelete = true;
    public function user(){
        return $this->belongsTo('App/user');
    }
}
