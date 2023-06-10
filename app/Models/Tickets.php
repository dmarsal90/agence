<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $requester_id
 * @property int    $team_id
 * @property int    $user_id
 * @property int    $status
 * @property int    $priority
 * @property int    $level
 * @property int    $rating
 * @property int    $created_at
 * @property int    $updated_at
 * @property int    $deleted_at
 * @property int    $ticket_type_id
 * @property int    $isSolved
 * @property int    $agent_id
 * @property int    $created_at
 * @property int    $updated_at
 * @property int    $deleted_at
 * @property string $title
 * @property string $body
 * @property string $public_token
 * @property string $subject
 * @property string $summary
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $comment
 */
class Tickets extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tickets';

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
        'title', 'body', 'public_token', 'requester_id', 'team_id', 'user_id', 'status', 'priority', 'level', 'rating', 'created_at', 'updated_at', 'deleted_at', 'ticket_type_id', 'subject', 'summary', 'name', 'email', 'subject', 'comment', 'isSolved', 'agent_id', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'title' => 'string', 'body' => 'string', 'public_token' => 'string', 'requester_id' => 'int', 'team_id' => 'int', 'user_id' => 'int', 'status' => 'int', 'priority' => 'int', 'level' => 'int', 'rating' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'ticket_type_id' => 'int', 'subject' => 'string', 'summary' => 'string', 'name' => 'string', 'email' => 'string', 'subject' => 'string', 'comment' => 'string', 'isSolved' => 'int', 'agent_id' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at'
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
