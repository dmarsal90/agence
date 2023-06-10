<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $id
 * @property string   $scopes
 * @property string   $scopes
 * @property string   $scopes
 * @property boolean  $revoked
 * @property boolean  $revoked
 * @property DateTime $expires_at
 * @property DateTime $expires_at
 * @property DateTime $expires_at
 * @property int      $user_id
 * @property int      $client_id
 * @property int      $revoked
 * @property int      $user_id
 * @property int      $client_id
 */
class OauthAuthCodes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_auth_codes';

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
        'user_id', 'client_id', 'scopes', 'revoked', 'expires_at', 'user_id', 'client_id', 'scopes', 'revoked', 'expires_at', 'user_id', 'client_id', 'scopes', 'revoked', 'expires_at'
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
        'id' => 'string', 'scopes' => 'string', 'revoked' => 'boolean', 'expires_at' => 'datetime', 'user_id' => 'int', 'client_id' => 'int', 'scopes' => 'string', 'revoked' => 'int', 'expires_at' => 'datetime', 'user_id' => 'int', 'client_id' => 'int', 'scopes' => 'string', 'revoked' => 'boolean', 'expires_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'expires_at', 'expires_at', 'expires_at'
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
