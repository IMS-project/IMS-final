<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Students
 * @package App\Models
 * @version March 4, 2020, 2:00 am UTC
 *
 * @property \App\Models\User advisor
 * @property \App\Models\User company
 * @property \App\Models\User department
 * @property \App\Models\User supervisor
 * @property \App\Models\User university
 * @property \App\Models\User user
 * @property integer user_id
 * @property integer university_id
 * @property integer company_id
 * @property integer advisor_id
 * @property integer supervisor_id
 * @property integer year
 * @property integer department_id
 * @property integer grade
 */
class Students extends Model
{
    use SoftDeletes;

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'university_id',
        'company_id',
        'advisor_id',
        'supervisor_id',
        'year',
        'department_id',
        'grade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'university_id' => 'integer',
        'company_id' => 'integer',
        'advisor_id' => 'integer',
        'supervisor_id' => 'integer',
        'year' => 'integer',
        'department_id' => 'integer',
        'grade' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'university_id' => 'required',
        'company_id' => 'required',
        'advisor_id' => 'required',
        'supervisor_id' => 'required',
        'year' => 'required',
        'department_id' => 'required',
        'grade' => 'required'
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
    public function company()
    {
        return $this->belongsTo(\App\Models\User::class, 'company_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\User::class, 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function supervisor()
    {
        return $this->belongsTo(\App\Models\User::class, 'supervisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function university()
    {
        return $this->belongsTo(\App\Models\User::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
