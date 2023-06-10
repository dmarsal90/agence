<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property int     $id
 * @property int     $estate_id
 * @property int     $user_id
 * @property int     $seller_id
 * @property int     $confirmed
 * @property int     $estate_id
 * @property int     $user_id
 * @property int     $seller_id
 * @property int     $confirmed
 * @property string  $event_id
 * @property string  $event_id
 * @property string  $event_id
 * @property boolean $confirmed
 */
class EstatesEvents extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estates_events';

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
        'estate_id', 'event_id', 'user_id', 'seller_id', 'confirmed', 'estate_id', 'event_id', 'user_id', 'seller_id', 'confirmed', 'estate_id', 'event_id', 'user_id', 'seller_id', 'confirmed'
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
        'id' => 'int', 'id' => 'int', 'event_id' => 'string', 'confirmed' => 'boolean', 'estate_id' => 'int', 'event_id' => 'string', 'user_id' => 'int', 'seller_id' => 'int', 'confirmed' => 'int', 'estate_id' => 'int', 'event_id' => 'string', 'user_id' => 'int', 'seller_id' => 'int', 'confirmed' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
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
