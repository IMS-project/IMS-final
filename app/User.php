<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;
  
    protected $fillable = [
        'first_name', 'last_name', 'sex', 'phone', 'email','password'
    ];
   
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsToMany('App\Role');
    }

    public function coordinator(){
        return $this->hasOne('App\UniCoordinator');
    }
    public function advisor(){
        return $this->hasOne('App\Advisor');
    }

    public function compcoordinator(){
        return $this->hasOne('App\CompCoordinator');
    }
    public function supervisor(){
        return $this->hasOne('App\Supervisor');
    }
    public function student(){
        return $this->hasOne('App\Student');
    }
   
}

