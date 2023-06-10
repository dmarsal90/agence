<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property int     $ticket_id
 * @property int     $user_id
 * @property int     $new_status
 * @property int     $created_at
 * @property int     $updated_at
 * @property boolean $private
 * @property string  $body
 */
class Comments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

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
        'ticket_id', 'user_id', 'new_status', 'private', 'body', 'created_at', 'updated_at'
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
        'id' => 'int', 'ticket_id' => 'int', 'user_id' => 'int', 'new_status' => 'int', 'private' => 'boolean', 'body' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
