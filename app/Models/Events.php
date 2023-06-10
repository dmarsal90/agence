<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property string   $name
 * @property string   $telephone
 * @property string   $email
 * @property string   $type_visit
 * @property string   $localization
 * @property string   $description
 * @property string   $name
 * @property string   $telephone
 * @property string   $email
 * @property string   $type_visit
 * @property string   $localization
 * @property string   $description
 * @property DateTime $start
 * @property DateTime $end
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $start
 * @property DateTime $end
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class Events extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

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
        'name', 'telephone', 'email', 'type_visit', 'start', 'end', 'localization', 'description', 'created_at', 'updated_at', 'deleted_at', 'name', 'telephone', 'email', 'type_visit', 'start', 'end', 'localization', 'description', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'name' => 'string', 'telephone' => 'string', 'email' => 'string', 'type_visit' => 'string', 'start' => 'datetime', 'end' => 'datetime', 'localization' => 'string', 'description' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'name' => 'string', 'telephone' => 'string', 'email' => 'string', 'type_visit' => 'string', 'start' => 'datetime', 'end' => 'datetime', 'localization' => 'string', 'description' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start', 'end', 'created_at', 'updated_at', 'deleted_at', 'start', 'end', 'created_at', 'updated_at', 'deleted_at'
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
