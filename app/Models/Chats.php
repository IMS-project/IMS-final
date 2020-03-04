<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Chats
 * @package App\Models
 * @version March 3, 2020, 11:49 pm UTC
 *
 * @property \App\Models\User reciever
 * @property \App\Models\User sender
 * @property integer sender_id
 * @property integer reciever_id
 * @property string body
 * @property string date
 */
class Chats extends Model
{
    use SoftDeletes;

    public $table = 'chats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sender_id',
        'reciever_id',
        'body',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sender_id' => 'integer',
        'reciever_id' => 'integer',
        'body' => 'string',
        'date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sender_id' => 'required',
        'reciever_id' => 'required',
        'body' => 'required',
        'date' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function reciever()
    {
        return $this->belongsTo(\App\Models\User::class, 'reciever_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sender()
    {
        return $this->belongsTo(\App\Models\User::class, 'sender_id');
    }
}
