<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placement extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    // protected $table= 'studentss';
    protected $fillable=['student_id', 'company_id','status'];

    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function department(){
        return $this->belongsTo('App\department');
    }
}
