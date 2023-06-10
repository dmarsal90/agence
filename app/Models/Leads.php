<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $status
 * @property int    $team_id
 * @property int    $user_id
 * @property int    $created_at
 * @property int    $updated_at
 * @property int    $deleted_at
 * @property string $email
 * @property string $name
 * @property string $body
 * @property string $username
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $postal_code
 * @property string $company
 * @property string $phone
 */
class Leads extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'leads';

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
        'email', 'status', 'team_id', 'user_id', 'name', 'body', 'username', 'address', 'city', 'country', 'postal_code', 'company', 'phone', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'email' => 'string', 'status' => 'int', 'team_id' => 'int', 'user_id' => 'int', 'name' => 'string', 'body' => 'string', 'username' => 'string', 'address' => 'string', 'city' => 'string', 'country' => 'string', 'postal_code' => 'string', 'company' => 'string', 'phone' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
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
