<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    // protected $table= 'supervisors';
    protected $fillable=['user_id', 'company_id','department_id'];
  

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function student(){
        return $this->hasMany('App\Student');
    }
    public function company(){    
        return $this->belongsTo('App\Company');
    }
    public function department(){    
        return $this->belongsTo('App\Companydepartment');
    }
    public function assign(){    
        return $this->belongsTo('App\Assignsupervisor');
    }
}
