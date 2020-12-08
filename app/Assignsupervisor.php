<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignsupervisor extends Model
{
   
    public function studentplacement(){
        return $this->belongsTo('App\Studentplacement');
    }
    public function supervisor(){
        return $this->belongsTo('App\Supervisor');
    }
}
