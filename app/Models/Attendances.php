<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attendances
 * @package App\Models
 * @version March 4, 2020, 11:45 pm UTC
 *
 * @property \App\Models\User advisor
 * @property \App\Models\User student
 * @property \App\Models\User supervisor
 * @property integer student_id
 * @property integer advisor_id
 * @property integer supervisor_id
 * @property string date
 * @property boolean status
 */
class Attendances extends Model
{
    use SoftDeletes;

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'advisor_id',
        'supervisor_id',
        'date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'advisor_id' => 'integer',
        'supervisor_id' => 'integer',
        'date' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'advisor_id' => 'required',
        'supervisor_id' => 'required',
        'date' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function advisor()
    {
        return $this->belongsTo(\App\Models\User::class, 'advisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function student()
    {
        return $this->belongsTo(\App\Models\User::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function supervisor()
    {
        return $this->belongsTo(\App\Models\User::class, 'supervisor_id');
    }
}
