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
 * @property int      $realestate_id
 * @property int      $estate_id
 * @property int      $realestate_id
 * @property string   $refrence
 * @property string   $url
 * @property string   $refrence
 * @property string   $url
 * @property string   $refrence
 * @property string   $url
 * @property Date     $put_online
 * @property Date     $put_online
 * @property Date     $put_online
 * @property float    $price
 * @property float    $price
 * @property float    $price
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class EstateRealestate extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_realestate';

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
        'estate_id', 'realestate_id', 'refrence', 'url', 'put_online', 'price', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'realestate_id', 'refrence', 'url', 'put_online', 'price', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'realestate_id', 'refrence', 'url', 'put_online', 'price', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'refrence' => 'string', 'url' => 'string', 'put_online' => 'date', 'price' => 'double', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'estate_id' => 'int', 'realestate_id' => 'int', 'refrence' => 'string', 'url' => 'string', 'put_online' => 'date', 'price' => 'float', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'estate_id' => 'int', 'realestate_id' => 'int', 'refrence' => 'string', 'url' => 'string', 'put_online' => 'date', 'price' => 'float', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'put_online', 'created_at', 'updated_at', 'deleted_at', 'put_online', 'created_at', 'updated_at', 'deleted_at', 'put_online', 'created_at', 'updated_at', 'deleted_at'
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
