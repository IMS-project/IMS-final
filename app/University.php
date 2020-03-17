<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class University extends Model
{
    //
    use SoftDeletes;

    public $table = 'universities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
   
    protected $fillable = ['name','address'];

    public function department(){
        return $this->hasMany('App\Department');
    }
    public function students(){
        return $this->hasMany('App\Student');
    }
    public function coordinator(){
        return $this->hasMany('App\UniCoordinator');
    }
}
