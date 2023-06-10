<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $deleted_at
 * @property string   $title
 * @property string   $name
 * @property string   $lastname
 * @property string   $address
 * @property string   $phone
 * @property string   $email
 * @property string   $key
 * @property string   $title
 * @property string   $name
 * @property string   $lastname
 * @property string   $address
 * @property string   $phone
 * @property string   $email
 * @property string   $key
 * @property string   $title
 * @property string   $name
 * @property string   $lastname
 * @property string   $address
 * @property string   $phone
 * @property string   $email
 * @property string   $key
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class Notaries extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notaries';

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
        'title', 'name', 'lastname', 'address', 'phone', 'email', 'key', 'created_at', 'updated_at', 'deleted_at', 'title', 'name', 'lastname', 'address', 'phone', 'email', 'key', 'created_at', 'updated_at', 'deleted_at', 'title', 'name', 'lastname', 'address', 'phone', 'email', 'key', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'title' => 'string', 'name' => 'string', 'lastname' => 'string', 'address' => 'string', 'phone' => 'string', 'email' => 'string', 'key' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'title' => 'string', 'name' => 'string', 'lastname' => 'string', 'address' => 'string', 'phone' => 'string', 'email' => 'string', 'key' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'title' => 'string', 'name' => 'string', 'lastname' => 'string', 'address' => 'string', 'phone' => 'string', 'email' => 'string', 'key' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
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
