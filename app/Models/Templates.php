<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $updated_at
 * @property string   $name
 * @property string   $subject
 * @property string   $file
 * @property string   $type
 * @property string   $user
 * @property string   $name
 * @property string   $subject
 * @property string   $file
 * @property string   $type
 * @property string   $user
 * @property string   $name
 * @property string   $subject
 * @property string   $file
 * @property string   $type
 * @property string   $user
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Templates extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'templates';

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
        'name', 'subject', 'file', 'type', 'user', 'created_at', 'updated_at', 'name', 'subject', 'file', 'type', 'user', 'created_at', 'updated_at', 'name', 'subject', 'file', 'type', 'user', 'created_at', 'updated_at'
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
        'id' => 'int', 'id' => 'int', 'name' => 'string', 'subject' => 'string', 'file' => 'string', 'type' => 'string', 'user' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'name' => 'string', 'subject' => 'string', 'file' => 'string', 'type' => 'string', 'user' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'name' => 'string', 'subject' => 'string', 'file' => 'string', 'type' => 'string', 'user' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'created_at', 'updated_at', 'created_at', 'updated_at'
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
