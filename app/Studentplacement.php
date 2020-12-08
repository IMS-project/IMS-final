<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentplacement extends Model
{
    protected $fillable=['student_id', 'company_id','companydepartment_id','duration_id','status'];
   
    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function companydepartment(){
        return $this->belongsTo('App\Companydepartment');
    }
    public function duration(){
        return $this->belongsTo('App\Duration');
    }
    public function assign(){
        return $this->hasOne('App\Assign');
    }
    public function assignsupervisor(){
        return $this->hasOne('App\Assignsupervisor');
    }
}
