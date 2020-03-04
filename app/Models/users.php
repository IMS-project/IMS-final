<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models
 * @version March 3, 2020, 11:22 pm UTC
 *
 * @property \App\Models\Role role
 * @property \Illuminate\Database\Eloquent\Collection admins
 * @property \Illuminate\Database\Eloquent\Collection advisors
 * @property \Illuminate\Database\Eloquent\Collection advisor1s
 * @property \Illuminate\Database\Eloquent\Collection attendances
 * @property \Illuminate\Database\Eloquent\Collection attendance2s
 * @property \Illuminate\Database\Eloquent\Collection attendance3s
 * @property \Illuminate\Database\Eloquent\Collection chats
 * @property \Illuminate\Database\Eloquent\Collection chat4s
 * @property \Illuminate\Database\Eloquent\Collection companyCoordinators
 * @property \Illuminate\Database\Eloquent\Collection companyCoordinator5s
 * @property \Illuminate\Database\Eloquent\Collection departments
 * @property \Illuminate\Database\Eloquent\Collection department6s
 * @property \Illuminate\Database\Eloquent\Collection placements
 * @property \Illuminate\Database\Eloquent\Collection placement7s
 * @property \Illuminate\Database\Eloquent\Collection placement8s
 * @property \Illuminate\Database\Eloquent\Collection reports
 * @property \Illuminate\Database\Eloquent\Collection report9s
 * @property \Illuminate\Database\Eloquent\Collection report10s
 * @property \Illuminate\Database\Eloquent\Collection role11s
 * @property \Illuminate\Database\Eloquent\Collection students
 * @property \Illuminate\Database\Eloquent\Collection student12s
 * @property \Illuminate\Database\Eloquent\Collection student13s
 * @property \Illuminate\Database\Eloquent\Collection student14s
 * @property \Illuminate\Database\Eloquent\Collection student15s
 * @property \Illuminate\Database\Eloquent\Collection student16s
 * @property \Illuminate\Database\Eloquent\Collection supervisors
 * @property \Illuminate\Database\Eloquent\Collection supervisor17s
 * @property \Illuminate\Database\Eloquent\Collection universities
 * @property \Illuminate\Database\Eloquent\Collection universityCoordinators
 * @property \Illuminate\Database\Eloquent\Collection universityCoordinator18s
 * @property \Illuminate\Database\Eloquent\Collection permissions
 * @property string first_name
 * @property string last_name
 * @property string address
 * @property string sex
 * @property string phone
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property integer role
 * @property string remember_token
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'address',
        'sex',
        'phone',
        'email',
        'email_verified_at',
        'password',
        'role',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'address' => 'string',
        'sex' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'role' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function admins()
    {
        return $this->hasMany(\App\Models\Admin::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function advisors()
    {
        return $this->hasMany(\App\Models\Advisor::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function advisor1s()
    {
        return $this->hasMany(\App\Models\Advisor::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function attendances()
    {
        return $this->hasMany(\App\Models\Attendance::class, 'advisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function attendance2s()
    {
        return $this->hasMany(\App\Models\Attendance::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function attendance3s()
    {
        return $this->hasMany(\App\Models\Attendance::class, 'supervisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chats()
    {
        return $this->hasMany(\App\Models\Chat::class, 'reciever_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chat4s()
    {
        return $this->hasMany(\App\Models\Chat::class, 'sender_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function companyCoordinators()
    {
        return $this->hasMany(\App\Models\CompanyCoordinator::class, 'company_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function companyCoordinator5s()
    {
        return $this->hasMany(\App\Models\CompanyCoordinator::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departments()
    {
        return $this->hasMany(\App\Models\Department::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function department6s()
    {
        return $this->hasMany(\App\Models\Department::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function placements()
    {
        return $this->hasMany(\App\Models\Placement::class, 'company_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function placement7s()
    {
        return $this->hasMany(\App\Models\Placement::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function placement8s()
    {
        return $this->hasMany(\App\Models\Placement::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reports()
    {
        return $this->hasMany(\App\Models\Report::class, 'advisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function report9s()
    {
        return $this->hasMany(\App\Models\Report::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function report10s()
    {
        return $this->hasMany(\App\Models\Report::class, 'supervisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function role11s()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'roles_users');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function students()
    {
        return $this->hasMany(\App\Models\Student::class, 'advisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function student12s()
    {
        return $this->hasMany(\App\Models\Student::class, 'company_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function student13s()
    {
        return $this->hasMany(\App\Models\Student::class, 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function student14s()
    {
        return $this->hasMany(\App\Models\Student::class, 'supervisor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function student15s()
    {
        return $this->hasMany(\App\Models\Student::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function student16s()
    {
        return $this->hasMany(\App\Models\Student::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function supervisors()
    {
        return $this->hasMany(\App\Models\Supervisor::class, 'company_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function supervisor17s()
    {
        return $this->hasMany(\App\Models\Supervisor::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function universities()
    {
        return $this->hasMany(\App\Models\University::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function universityCoordinators()
    {
        return $this->hasMany(\App\Models\UniversityCoordinator::class, 'university_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function universityCoordinator18s()
    {
        return $this->hasMany(\App\Models\UniversityCoordinator::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Permission::class, 'users_permissions');
    }
}
