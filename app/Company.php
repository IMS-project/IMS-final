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
        return $this->hasOne('App\Department');
    }
    
    public function student(){
        return $this->hasOne('App\Student');
    }

    public function coordinator(){
        return $this->hasOne('App\CopmCoordinator');
    }
    public function supervisor(){
        return $this->hasMany('App\Supervisor');
    }
    public function advisor(){
        return $this->hasOne('App\Supervisor');
    }
    public function internship(){
        return $this->hasOne('App\Internship');
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
