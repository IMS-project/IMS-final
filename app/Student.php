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
    protected $fillable=['user_id', 'university_id', 'department_id'];

    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function university(){
        return $this->belongsTo('App\University');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
