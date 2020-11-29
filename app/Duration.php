<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    protected $fillable = ['name'];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

   public function students(){
        return $this->hasOne('App\Student');
   }
   public function department(){
    return $this->hasOne('App\Companydepartment');
}
}
