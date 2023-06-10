<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $tag_id
 * @property int    $taggable_id
 * @property string $taggable_type
 */
class Taggables extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taggables';

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
        'tag_id', 'taggable_id', 'taggable_type'
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
        'tag_id' => 'int', 'taggable_id' => 'int', 'taggable_type' => 'string'
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
