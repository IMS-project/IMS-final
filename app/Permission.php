<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{

   protected $softDelete = true;
    public function roles() {

        return $this->belongsToMany(Role::class,'roles_permissions');
            
     }
     
     public function users() {
     
        return $this->belongsToMany(User::class,'user_permissions');
            
     }
}
