<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $deleted_at
 * @property int      $estate_id
 * @property int      $user_id
 * @property int      $sent
 * @property int      $hide
 * @property int      $next_reminder
 * @property int      $estate_id
 * @property int      $user_id
 * @property int      $sent
 * @property int      $hide
 * @property int      $next_reminder
 * @property string   $name_reminder
 * @property string   $content
 * @property string   $name_reminder
 * @property string   $content
 * @property string   $name_reminder
 * @property string   $content
 * @property boolean  $sent
 * @property boolean  $hide
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class EstateReminder extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_reminder';

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
        'estate_id', 'user_id', 'name_reminder', 'content', 'sent', 'hide', 'next_reminder', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'user_id', 'name_reminder', 'content', 'sent', 'hide', 'next_reminder', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'user_id', 'name_reminder', 'content', 'sent', 'hide', 'next_reminder', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'name_reminder' => 'string', 'content' => 'string', 'sent' => 'boolean', 'hide' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'estate_id' => 'int', 'user_id' => 'int', 'name_reminder' => 'string', 'content' => 'string', 'sent' => 'int', 'hide' => 'int', 'next_reminder' => 'int', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'estate_id' => 'int', 'user_id' => 'int', 'name_reminder' => 'string', 'content' => 'string', 'sent' => 'int', 'hide' => 'int', 'next_reminder' => 'int', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at'
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
