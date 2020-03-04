<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Companies
 * @package App\Models
 * @version March 3, 2020, 11:43 pm UTC
 *
 * @property string name
 * @property string address
 * @property integer offer_capacity
 * @property string field_of_study
 * @property integer min_grade
 * @property string student_benefit
 */
class Companies extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'offer_capacity',
        'field_of_study',
        'min_grade',
        'student_benefit'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'offer_capacity' => 'integer',
        'field_of_study' => 'string',
        'min_grade' => 'integer',
        'student_benefit' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'offer_capacity' => 'required',
        'field_of_study' => 'required',
        'min_grade' => 'required',
        'student_benefit' => 'required'
    ];

    
}
