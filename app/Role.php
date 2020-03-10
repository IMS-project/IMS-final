<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
 
    protected $softDelete = true;
protected $fillable = ['name'];
protected $table = "roles";
     public function users() {
     
        return $this->belongsToMany(User::class,'roles_users');
            
     }
public function hasAccess(array $permissions ){
       foreach($permissions as $permission){
           if($this->haspermission($permission)){
               return true;
           }
           return false;
}

  }

  protected function haspermission(string $permission){
     $permissions = json_decode ($this->permissions,true);
     return $permissions[$permission]??false;

  }
} 
