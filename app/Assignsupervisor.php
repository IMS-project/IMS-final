<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignsupervisor extends Model
{
   
    public function placement(){
        return $this->belongsTo('App\placement');
    }
    public function supervisor(){
        return $this->belongsTo('App\Supervisor');
    }
}
