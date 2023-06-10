<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id
 * @property int     $user_id
 * @property int     $created_at
 * @property int     $updated_at
 * @property boolean $daily_tasks_notification
 * @property boolean $new_ticket_notification
 * @property boolean $ticket_assigned_notification
 * @property boolean $ticket_updated_notification
 * @property boolean $new_lead_notification
 * @property boolean $lead_assigned_notification
 * @property boolean $new_idea_notification
 * @property boolean $mention_notification
 * @property boolean $ticket_rated_notification
 * @property boolean $escalated_ticket_notification
 * @property string  $tickets_signature
 */
class UserSettings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_settings';

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
        'user_id', 'daily_tasks_notification', 'tickets_signature', 'new_ticket_notification', 'ticket_assigned_notification', 'ticket_updated_notification', 'new_lead_notification', 'lead_assigned_notification', 'new_idea_notification', 'mention_notification', 'ticket_rated_notification', 'created_at', 'updated_at', 'escalated_ticket_notification'
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
        'id' => 'int', 'user_id' => 'int', 'daily_tasks_notification' => 'boolean', 'tickets_signature' => 'string', 'new_ticket_notification' => 'boolean', 'ticket_assigned_notification' => 'boolean', 'ticket_updated_notification' => 'boolean', 'new_lead_notification' => 'boolean', 'lead_assigned_notification' => 'boolean', 'new_idea_notification' => 'boolean', 'mention_notification' => 'boolean', 'ticket_rated_notification' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'escalated_ticket_notification' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
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
