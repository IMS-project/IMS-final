<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //


protected $fillable =['name','address','user_id'];

    public function deparments(){
        return $this->hasMany('App\Department');
    }
    public function users() {
     
        return $this->belongsToMany(User::class,'user_id');
            
     }
}
