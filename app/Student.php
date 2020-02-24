<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function role(){    
        return $this->belongsToMany('App\Role');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }
    public function advisor(){    
        return $this->belongsTo('App\Advisor');
    }
    public function supervisor(){    
        return $this->belongsTo('App\Supervisor');
    }
    public function report(){    
        return $this->hasToMany('App\Report');
    }
    public function chat(){    
        return $this->hasMany('App\Chat');
    }
    public function attendance(){    
        return $this->hasMany('App\Attendance','student_id','id');
    }
    public function placement(){
        return $this->belongsTo('App\Placement', 'student_id', 'id');
    }
    public function department(){
        return $this->belongsTo('App\Department', 'department_id', 'id');
    }
}

