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
        return $this->hasMany('App\Student');
   }
}