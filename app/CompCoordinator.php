<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompCoordinator extends Model
{
    //
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $table= 'comp_coordinators';
    protected $fillable=['user_id', 'company_id'];
  
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function company(){    
        return $this->belongsTo('App\Company');
    }

}