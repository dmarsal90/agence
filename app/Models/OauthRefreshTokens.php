<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $id
 * @property string   $access_token_id
 * @property boolean  $revoked
 * @property boolean  $revoked
 * @property DateTime $expires_at
 * @property DateTime $expires_at
 * @property DateTime $expires_at
 * @property int      $revoked
 */
class OauthRefreshTokens extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_refresh_tokens';

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
        'access_token_id', 'revoked', 'expires_at', 'access_token_id', 'revoked', 'expires_at', 'access_token_id', 'revoked', 'expires_at'
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
        'id' => 'string', 'access_token_id' => 'string', 'revoked' => 'boolean', 'expires_at' => 'datetime', 'revoked' => 'int', 'expires_at' => 'datetime', 'revoked' => 'boolean', 'expires_at' => 'datetime'
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
