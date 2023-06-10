<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $estate_id
 * @property int      $estate_id
 * @property string   $name
 * @property string   $file_name
 * @property string   $type
 * @property string   $extension
 * @property string   $name
 * @property string   $file_name
 * @property string   $type
 * @property string   $extension
 * @property string   $name
 * @property string   $file_name
 * @property string   $type
 * @property string   $extension
 * @property float    $size
 * @property float    $size
 * @property float    $size
 * @property DateTime $created_at
 * @property DateTime $created_at
 */
class Medias extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medias';

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
        'estate_id', 'name', 'file_name', 'type', 'size', 'extension', 'created_at', 'estate_id', 'name', 'file_name', 'type', 'size', 'extension', 'created_at', 'estate_id', 'name', 'file_name', 'type', 'size', 'extension', 'created_at'
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
        'id' => 'int', 'id' => 'int', 'name' => 'string', 'file_name' => 'string', 'type' => 'string', 'size' => 'double', 'extension' => 'string', 'created_at' => 'timestamp', 'estate_id' => 'int', 'name' => 'string', 'file_name' => 'string', 'type' => 'string', 'size' => 'float', 'extension' => 'string', 'created_at' => 'datetime', 'estate_id' => 'int', 'name' => 'string', 'file_name' => 'string', 'type' => 'string', 'size' => 'float', 'extension' => 'string', 'created_at' => 'datetime'
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
