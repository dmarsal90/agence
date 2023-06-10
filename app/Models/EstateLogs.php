<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $estate_id
 * @property int      $user_id
 * @property int      $estate_id
 * @property int      $user_id
 * @property string   $old_value
 * @property string   $new_value
 * @property string   $field
 * @property string   $old_value
 * @property string   $new_value
 * @property string   $field
 * @property string   $old_value
 * @property string   $new_value
 * @property string   $field
 * @property DateTime $created_at
 * @property DateTime $created_at
 */
class EstateLogs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_logs';

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
        'estate_id', 'user_id', 'old_value', 'new_value', 'field', 'created_at', 'estate_id', 'user_id', 'old_value', 'new_value', 'field', 'created_at', 'estate_id', 'user_id', 'old_value', 'new_value', 'field', 'created_at'
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
        'id' => 'int', 'id' => 'int', 'old_value' => 'string', 'new_value' => 'string', 'field' => 'string', 'created_at' => 'timestamp', 'estate_id' => 'int', 'user_id' => 'int', 'old_value' => 'string', 'new_value' => 'string', 'field' => 'string', 'created_at' => 'datetime', 'estate_id' => 'int', 'user_id' => 'int', 'old_value' => 'string', 'new_value' => 'string', 'field' => 'string', 'created_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'created_at', 'created_at'
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
