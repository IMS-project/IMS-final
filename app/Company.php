<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name','address',
    ];
    
    public function internship(){
        return $this->hasMany('App\Internship');
    }
    public function supervisor(){
        return $this->hasMany('App\Supervisor');
    }
    public function cooordinator(){
        return $this->hasone('App\comp_coordinator');
    }
}
