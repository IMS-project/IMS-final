<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
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
