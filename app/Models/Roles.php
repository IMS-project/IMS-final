<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Roles
 * @package App\Models
 * @version March 4, 2020, 3:03 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissions
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property \Illuminate\Database\Eloquent\Collection user1s
 * @property string name
 * @property string slug
 * @property string permission
 */
class Roles extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'roles_users');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function user1s()
    {
        return $this->hasMany(\App\Models\User::class, 'role');
    }
}
