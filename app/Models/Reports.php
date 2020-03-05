<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reports
 * @package App\Models
 * @version March 4, 2020, 2:33 am UTC
 *
 * @property \App\Models\User advisor
 * @property \App\Models\User student
 * @property \App\Models\User supervisor
 * @property integer student_id
 * @property integer advisor_id
 * @property integer supervisor_id
 * @property string text
 * @property number evaluation
 * @property string attachment
 */
class Reports extends Model
{
    use SoftDeletes;

    public $table = 'reports';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'advisor_id',
        'supervisor_id',
        'text',
        'evaluation',
        'attachment'
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
        'text' => 'string',
        'evaluation' => 'float',
        'attachment' => 'string'
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
        'text' => 'required'
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
