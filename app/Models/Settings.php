<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $id
 * @property int      $default_team_id
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $created_at
 * @property int      $updated_at
 * @property string   $slack_webhook_url
 * @property string   $type
 * @property string   $name
 * @property string   $value
 * @property string   $type
 * @property string   $name
 * @property string   $value
 * @property string   $type
 * @property string   $name
 * @property string   $value
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Settings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

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
        'slack_webhook_url', 'default_team_id', 'created_at', 'updated_at', 'type', 'name', 'value', 'created_at', 'updated_at', 'type', 'name', 'value', 'created_at', 'updated_at', 'type', 'name', 'value', 'created_at', 'updated_at'
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
        'id' => 'int', 'id' => 'int', 'id' => 'int', 'slack_webhook_url' => 'string', 'default_team_id' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'type' => 'string', 'name' => 'string', 'value' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'type' => 'string', 'name' => 'string', 'value' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'type' => 'string', 'name' => 'string', 'value' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'created_at', 'updated_at', 'created_at', 'updated_at', 'created_at', 'updated_at'
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
