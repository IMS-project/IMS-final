<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $table= 'advisors';

    protected $fillable=['user_id', 'university_id'];
  
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function university(){    
        return $this->belongsTo('App\University');
    }

}