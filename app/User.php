<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password'
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
    public function university_coordinator(){
        return $this->hasOne('App\University_coordinator');
    }
    public function company_coordinator(){
        return $this->hasOne('App\Company_coordinator');
    }
    public function chats(){
        return $this->hasMany('App/Chat');
    }
}
