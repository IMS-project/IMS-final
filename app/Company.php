<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    //

    protected $softDelete = true;
    public function company_coordinator(){
        return $this->hasMany('App\Company_coordinator', 'company_id', 'id');
    }
    public function supervisor(){
        return $this->hasMany('App\Supervisor', 'company_id', 'id');
    }

    public function admin(){
        return $this->hasOne('App\Admin');
    }
    
}
