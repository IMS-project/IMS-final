<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companydepartment extends Model
{
    protected $fillable = [
        'department_name','company_id',
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

   public function students(){
        return $this->hasMany('App\Student');
   }
   public function supervisor(){
    return $this->hasMany('App\Supervisor');
}
    public function applicant(){
        return $this->hasMany('App\Applicant');
    }
    public function placement(){
        return $this->hasOne('App\placement');
    }
    public function assign(){
        return $this->hasOne('App\Assign');
    }
}
