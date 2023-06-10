<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $failed_at
 * @property int      $failed_at
 * @property int      $failed_at
 * @property string   $uuid
 * @property string   $connection
 * @property string   $queue
 * @property string   $payload
 * @property string   $exception
 * @property string   $connection
 * @property string   $queue
 * @property string   $payload
 * @property string   $exception
 * @property string   $uuid
 * @property string   $connection
 * @property string   $queue
 * @property string   $payload
 * @property string   $exception
 * @property string   $uuid
 * @property string   $connection
 * @property string   $queue
 * @property string   $payload
 * @property string   $exception
 * @property string   $uuid
 * @property string   $connection
 * @property string   $queue
 * @property string   $payload
 * @property string   $exception
 * @property DateTime $failed_at
 * @property DateTime $failed_at
 */
class FailedJobs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'failed_jobs';

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
        'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at', 'connection', 'queue', 'payload', 'exception', 'failed_at', 'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at', 'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at', 'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at'
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
        'id' => 'int', 'id' => 'int', 'uuid' => 'string', 'connection' => 'string', 'queue' => 'string', 'payload' => 'string', 'exception' => 'string', 'failed_at' => 'timestamp', 'connection' => 'string', 'queue' => 'string', 'payload' => 'string', 'exception' => 'string', 'failed_at' => 'timestamp', 'uuid' => 'string', 'connection' => 'string', 'queue' => 'string', 'payload' => 'string', 'exception' => 'string', 'failed_at' => 'timestamp', 'uuid' => 'string', 'connection' => 'string', 'queue' => 'string', 'payload' => 'string', 'exception' => 'string', 'failed_at' => 'datetime', 'uuid' => 'string', 'connection' => 'string', 'queue' => 'string', 'payload' => 'string', 'exception' => 'string', 'failed_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'failed_at', 'failed_at', 'failed_at', 'failed_at', 'failed_at'
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
