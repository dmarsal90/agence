<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property int     $created_at
 * @property int     $updated_at
 * @property string  $name
 * @property string  $email
 * @property boolean $no_reply
 */
class Requesters extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requesters';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'created_at', 'updated_at', 'no_reply'
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
        'id' => 'int', 'name' => 'string', 'email' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'no_reply' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
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
