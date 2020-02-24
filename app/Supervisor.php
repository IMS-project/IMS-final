<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    //
    public function roles(){    
        return $this->belongsToMany('App\Role');
    }
    public function company(){    
        return $this->belongsTo('App\Company');
    }
    public function user(){    
        return $this->belongsTo('App\User');
    }
    public function student(){    
        return $this->hasMany('App\Student');
    }
}
