<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
 

    public $table = 'companies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $dates = ['deleted_at'];

    protected $fillable=["name", "address","work_area","offer_capacity","mini_grade","other_skills"];

   // protected $guarded=[];
   public function department(){
        return $this->hasMany('App\Department');
    }
    
    public function student(){
        return $this->hasMany('App\Student');
    }

    public function coordinator(){
        return $this->hasMany('App\CopmCoordinator');
    }
    public function supervisor(){
        return $this->hasMany('App\Supervisor');
    }
    public function internship(){
        return $this->hasMany('App\Internship');
    }
    public function applicant(){
        return $this->hasOne('App\Applicant');
    }

}
