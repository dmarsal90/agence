<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $seq
 * @property string $name
 * @property string $seq
 */
class SqliteSequence extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sqlite_sequence';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'seq', 'name', 'seq'
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
        'name' => 'string', 'seq' => 'string', 'name' => 'string', 'seq' => 'string'
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
