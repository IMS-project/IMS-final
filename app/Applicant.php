<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    public $table = 'applicants';   

    protected $fillable=['user_id', 'company_id'];
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function department(){
        return $this->belongsTo('App\Companydepartment');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function student(){
        return $this->belongsTo('App\Student');
    }
  
}
