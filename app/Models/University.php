<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class University
 * @package App\Models
 * @version March 11, 2020, 12:29 am UTC
 *
 */
class University extends Model
{
    use SoftDeletes;

    public $table = 'universities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
