<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $requester_id
 * @property int    $status
 * @property int    $issue_id
 * @property int    $development_effort
 * @property int    $sales_impact
 * @property int    $current_impact
 * @property int    $created_at
 * @property int    $updated_at
 * @property int    $deleted_at
 * @property string $title
 * @property string $repository
 * @property string $body
 * @property Date   $due_date
 */
class Ideas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ideas';

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
        'requester_id', 'status', 'title', 'repository', 'issue_id', 'due_date', 'body', 'development_effort', 'sales_impact', 'current_impact', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'requester_id' => 'int', 'status' => 'int', 'title' => 'string', 'repository' => 'string', 'issue_id' => 'int', 'due_date' => 'date', 'body' => 'string', 'development_effort' => 'int', 'sales_impact' => 'int', 'current_impact' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'due_date', 'created_at', 'updated_at', 'deleted_at'
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
