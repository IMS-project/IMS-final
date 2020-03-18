<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompCoordinator extends Model
{
    //
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];


    //protected $table= 'comp_coordinators';
    protected $fillable=['user_id', 'company_id'];
  
    public function users(){
        return $this->hasone('App\User');
    }
    public function company(){    
        return $this->belongsTo('App\Company');
    }

   

}
