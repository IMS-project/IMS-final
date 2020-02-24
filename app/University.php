<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    public function deparments(){
        return $this->hasMany('App\Department');
    }
    public function advisors(){
        return $this->hasMany('App\Advisor','university_id','id');
    }
    public function university_coordinator(){
        return $this->hasMany('App\University_coordinator','university_id','id');
    }
    public function student(){
        return $this->hasMany('App\Student','university_id','id');
    }
    public function admin(){
        return $this->hasone('App\Admin');
    }
}
