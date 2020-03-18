<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UniCoordinator extends Model
{
    //
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

   // protected $table= 'uni_coordinators';
    protected $fillable=['user_id', 'university_id'];

    public function users(){
        return $this->hasone('App\User');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }
}

