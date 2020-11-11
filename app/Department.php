<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'name','university_id',
    ];

    public function university()
    {
        return $this->belongsTo('App\University');
    }

   public function students(){
        return $this->hasOne('App\Student');
   }

}
