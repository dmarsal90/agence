<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Date $date
 * @property int  $type
 * @property int  $kpi
 * @property int  $relation_id
 * @property int  $total
 * @property int  $count
 */
class Kpis extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kpis';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'date';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'kpi', 'relation_id', 'total', 'count'
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
        'date' => 'date', 'type' => 'int', 'kpi' => 'int', 'relation_id' => 'int', 'total' => 'int', 'count' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date'
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
