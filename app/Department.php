<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'department_name','university_id',
    ];

    public function university()
    {
        return $this->belongsTo('App\University');
    }

   public function students(){
        return $this->hasMany('App\Student');
   }
   public function advisor(){
    return $this->hasMany('App\Advisor');
}

}
