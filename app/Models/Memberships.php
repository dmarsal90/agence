<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property int     $user_id
 * @property int     $team_id
 * @property int     $created_at
 * @property int     $updated_at
 * @property boolean $admin
 */
class Memberships extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'memberships';

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
        'user_id', 'team_id', 'admin', 'created_at', 'updated_at'
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
        'id' => 'int', 'user_id' => 'int', 'team_id' => 'int', 'admin' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
