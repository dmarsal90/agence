<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $email
 * @property string   $token
 * @property string   $email
 * @property string   $token
 * @property string   $email
 * @property string   $token
 * @property string   $email
 * @property string   $token
 * @property string   $email
 * @property string   $token
 * @property int      $created_at
 * @property int      $created_at
 * @property int      $created_at
 * @property DateTime $created_at
 * @property DateTime $created_at
 */
class PasswordResets extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'password_resets';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'token', 'created_at', 'email', 'token', 'created_at', 'email', 'token', 'created_at', 'email', 'token', 'created_at', 'email', 'token', 'created_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string', 'token' => 'string', 'created_at' => 'timestamp', 'email' => 'string', 'token' => 'string', 'created_at' => 'timestamp', 'email' => 'string', 'token' => 'string', 'created_at' => 'timestamp', 'email' => 'string', 'token' => 'string', 'created_at' => 'datetime', 'email' => 'string', 'token' => 'string', 'created_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'created_at', 'created_at', 'created_at', 'created_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
