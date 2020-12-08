<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    // protected $table= 'studentss';
    protected $fillable=['student_id', 'university_id', 'department_id','class_year','grade','semester_term','email','phone'];

    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function university(){
        return $this->belongsTo('App\University');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function applicant(){
        return $this->hasOne('App\Applicant');
    }
    public function studentplacement(){
        return $this->hasOne('App\Studentplacement');
    }
    public function supervisor(){
        return $this->belongsTo('App\Supervisor');
    }

    public function attendance(){
        return $this->hasOne('App\Attendance');
    }
}
