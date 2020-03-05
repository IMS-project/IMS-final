<?php

namespace App;
use App\Permissions\HasPermissionsTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $softDelete = true;
    protected $fillable = [
        'name', 'address','email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class,'roles_users');
    }
    public function student(){
        return $this->hasOne('App\Student');
    }
    public function advisor(){
        return $this->hasOne('App\Advisor');
    }
    public function supervisor(){
        return $this->hasOne('App\Supervisor');
    }
    public function admin(){
        return $this->hasOne('App\Admin');
    }

    public function university(){    
        return $this->belongsTo('App\University');
    }
    
    public function university_coordinator(){
        return $this->hasOne('App\University_coordinator');
    }
    public function company_coordinator(){
        return $this->hasOne('App\Company_coordinator');
    }
    public function chats(){
        return $this->hasMany('App/Chat');
    }

    public function hasAccess(array $permissions ){
       foreach($this->roles as $role){
           if($role->hasAccess($permissions)){
               return true;
           }
          
}
return false;
  }

  public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
}