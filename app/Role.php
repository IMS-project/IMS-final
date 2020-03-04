<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


protected $fillable = ['name','slug','permission'];
protected $casts = [
    'permissions' => 'array',
];


    public function permissions() {

        return $this->belongsToMany(Permission::class,'roles_permissions');
            
     }
     
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
