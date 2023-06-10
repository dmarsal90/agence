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
 * @property int      $desires_to_sell
 * @property int      $estate_id
 * @property int      $desires_to_sell
 * @property string   $interior_state
 * @property string   $exterior_state
 * @property string   $district_state
 * @property string   $interior_highlights
 * @property string   $exterior_highlights
 * @property string   $interior_weak_point
 * @property string   $exterior_weak_point
 * @property string   $accept_price
 * @property string   $agent_notice
 * @property string   $interior_state
 * @property string   $exterior_state
 * @property string   $district_state
 * @property string   $interior_highlights
 * @property string   $exterior_highlights
 * @property string   $interior_weak_point
 * @property string   $exterior_weak_point
 * @property string   $accept_price
 * @property string   $agent_notice
 * @property string   $interior_state
 * @property string   $exterior_state
 * @property string   $district_state
 * @property string   $interior_highlights
 * @property string   $exterior_highlights
 * @property string   $interior_weak_point
 * @property string   $exterior_weak_point
 * @property string   $accept_price
 * @property string   $agent_notice
 * @property float    $his_estimate
 * @property float    $his_estimate
 * @property float    $his_estimate
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class EstateRemarks extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_remarks';

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
        'estate_id', 'interior_state', 'exterior_state', 'district_state', 'interior_highlights', 'exterior_highlights', 'interior_weak_point', 'exterior_weak_point', 'desires_to_sell', 'his_estimate', 'accept_price', 'agent_notice', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'interior_state', 'exterior_state', 'district_state', 'interior_highlights', 'exterior_highlights', 'interior_weak_point', 'exterior_weak_point', 'desires_to_sell', 'his_estimate', 'accept_price', 'agent_notice', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'interior_state', 'exterior_state', 'district_state', 'interior_highlights', 'exterior_highlights', 'interior_weak_point', 'exterior_weak_point', 'desires_to_sell', 'his_estimate', 'accept_price', 'agent_notice', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'interior_state' => 'string', 'exterior_state' => 'string', 'district_state' => 'string', 'interior_highlights' => 'string', 'exterior_highlights' => 'string', 'interior_weak_point' => 'string', 'exterior_weak_point' => 'string', 'his_estimate' => 'double', 'accept_price' => 'string', 'agent_notice' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'estate_id' => 'int', 'interior_state' => 'string', 'exterior_state' => 'string', 'district_state' => 'string', 'interior_highlights' => 'string', 'exterior_highlights' => 'string', 'interior_weak_point' => 'string', 'exterior_weak_point' => 'string', 'desires_to_sell' => 'int', 'his_estimate' => 'float', 'accept_price' => 'string', 'agent_notice' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'estate_id' => 'int', 'interior_state' => 'string', 'exterior_state' => 'string', 'district_state' => 'string', 'interior_highlights' => 'string', 'exterior_highlights' => 'string', 'interior_weak_point' => 'string', 'exterior_weak_point' => 'string', 'desires_to_sell' => 'int', 'his_estimate' => 'float', 'accept_price' => 'string', 'agent_notice' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
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
