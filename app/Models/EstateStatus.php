<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $start_at
 * @property int      $stop_at
 * @property int      $estate_id
 * @property int      $category_id
 * @property int      $user_id
 * @property int      $estate_id
 * @property int      $category_id
 * @property int      $user_id
 * @property DateTime $start_at
 * @property DateTime $stop_at
 * @property DateTime $start_at
 * @property DateTime $stop_at
 */
class EstateStatus extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_status';

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
        'estate_id', 'category_id', 'user_id', 'start_at', 'stop_at', 'estate_id', 'category_id', 'user_id', 'start_at', 'stop_at', 'estate_id', 'category_id', 'user_id', 'start_at', 'stop_at'
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
        'id' => 'int', 'id' => 'int', 'start_at' => 'timestamp', 'stop_at' => 'timestamp', 'estate_id' => 'int', 'category_id' => 'int', 'user_id' => 'int', 'start_at' => 'datetime', 'stop_at' => 'datetime', 'estate_id' => 'int', 'category_id' => 'int', 'user_id' => 'int', 'start_at' => 'datetime', 'stop_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_at', 'stop_at', 'start_at', 'stop_at', 'start_at', 'stop_at'
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
