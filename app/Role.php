<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $fillable = ['name'];
    protected $table = "roles";
    public function users() {
     
        // return $this->belongsToMany(User::class,'roles_users');
        return $this->belongsToMany('App\User');
             
     }
}
