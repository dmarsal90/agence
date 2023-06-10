<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $estate_id
 * @property int      $user_id
 * @property int      $estate_id
 * @property int      $user_id
 * @property string   $comment
 * @property string   $comment
 * @property string   $comment
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class EstateComments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_comments';

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
        'estate_id', 'user_id', 'comment', 'created_at', 'updated_at', 'estate_id', 'user_id', 'comment', 'created_at', 'updated_at', 'estate_id', 'user_id', 'comment', 'created_at', 'updated_at'
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
        'id' => 'int', 'id' => 'int', 'comment' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'estate_id' => 'int', 'user_id' => 'int', 'comment' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'estate_id' => 'int', 'user_id' => 'int', 'comment' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'created_at', 'updated_at', 'created_at', 'updated_at'
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
