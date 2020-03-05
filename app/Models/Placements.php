<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Placements
 * @package App\Models
 * @version March 4, 2020, 2:33 am UTC
 *
 * @property \App\Models\User company
 * @property \App\Models\User student
 * @property \App\Models\User university
 * @property integer student_id
 * @property integer company_id
 * @property integer university_id
 * @property string work_area
 * @property string start_date
 * @property string end_date
 * @property integer number_of_days
 */
class Placements extends Model
{
    use SoftDeletes;

    public $table = 'placements';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'company_id',
        'university_id',
        'work_area',
        'start_date',
        'end_date',
        'number_of_days'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'company_id' => 'integer',
        'university_id' => 'integer',
        'work_area' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'number_of_days' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'company_id' => 'required',
        'university_id' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'number_of_days' => 'required'
    ];

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
    public function student()
    {
        return $this->belongsTo(\App\Models\User::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function university()
    {
        return $this->belongsTo(\App\Models\User::class, 'university_id');
    }
}
