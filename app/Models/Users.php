<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $id
 * @property int      $email_verified_at
 * @property int      $two_factor_confirmed_at
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $email_verified_at
 * @property int      $type
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $deleted_at
 * @property int      $type
 * @property int      $active
 * @property int      $type
 * @property int      $active
 * @property string   $name
 * @property string   $email
 * @property string   $password
 * @property string   $two_factor_secret
 * @property string   $two_factor_recovery_codes
 * @property string   $remember_token
 * @property string   $profile_photo_path
 * @property string   $name
 * @property string   $email
 * @property string   $locale
 * @property string   $password
 * @property string   $remember_token
 * @property string   $token
 * @property string   $name
 * @property string   $email
 * @property string   $login
 * @property string   $password
 * @property string   $remember_token
 * @property string   $google_email
 * @property string   $google_token
 * @property string   $menu
 * @property string   $name
 * @property string   $email
 * @property string   $login
 * @property string   $password
 * @property string   $remember_token
 * @property string   $google_email
 * @property string   $google_token
 * @property string   $menu
 * @property string   $name
 * @property string   $email
 * @property string   $login
 * @property string   $password
 * @property string   $remember_token
 * @property string   $google_email
 * @property string   $google_token
 * @property string   $menu
 * @property boolean  $admin
 * @property boolean  $assistant
 * @property boolean  $can_see_reports
 * @property boolean  $active
 * @property DateTime $email_verified_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $email_verified_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class Users extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

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
        'name', 'email', 'email_verified_at', 'password', 'two_factor_secret', 'two_factor_recovery_codes', 'two_factor_confirmed_at', 'remember_token', 'current_team_id', 'profile_photo_path', 'created_at', 'updated_at', 'name', 'email', 'locale', 'password', 'admin', 'assistant', 'remember_token', 'created_at', 'updated_at', 'can_see_reports', 'token', 'name', 'email', 'login', 'email_verified_at', 'password', 'type', 'remember_token', 'google_email', 'google_token', 'active', 'menu', 'created_at', 'updated_at', 'deleted_at', 'name', 'email', 'login', 'email_verified_at', 'password', 'type', 'remember_token', 'google_email', 'google_token', 'active', 'menu', 'created_at', 'updated_at', 'deleted_at', 'name', 'email', 'login', 'email_verified_at', 'password', 'type', 'remember_token', 'google_email', 'google_token', 'active', 'menu', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'id' => 'int', 'name' => 'string', 'email' => 'string', 'email_verified_at' => 'timestamp', 'password' => 'string', 'two_factor_secret' => 'string', 'two_factor_recovery_codes' => 'string', 'two_factor_confirmed_at' => 'timestamp', 'remember_token' => 'string', 'profile_photo_path' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'name' => 'string', 'email' => 'string', 'locale' => 'string', 'password' => 'string', 'admin' => 'boolean', 'assistant' => 'boolean', 'remember_token' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'can_see_reports' => 'boolean', 'token' => 'string', 'name' => 'string', 'email' => 'string', 'login' => 'string', 'email_verified_at' => 'timestamp', 'password' => 'string', 'type' => 'int', 'remember_token' => 'string', 'google_email' => 'string', 'google_token' => 'string', 'active' => 'boolean', 'menu' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'name' => 'string', 'email' => 'string', 'login' => 'string', 'email_verified_at' => 'datetime', 'password' => 'string', 'type' => 'int', 'remember_token' => 'string', 'google_email' => 'string', 'google_token' => 'string', 'active' => 'int', 'menu' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'name' => 'string', 'email' => 'string', 'login' => 'string', 'email_verified_at' => 'datetime', 'password' => 'string', 'type' => 'int', 'remember_token' => 'string', 'google_email' => 'string', 'google_token' => 'string', 'active' => 'int', 'menu' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'email_verified_at', 'two_factor_confirmed_at', 'created_at', 'updated_at', 'created_at', 'updated_at', 'email_verified_at', 'created_at', 'updated_at', 'deleted_at', 'email_verified_at', 'created_at', 'updated_at', 'deleted_at', 'email_verified_at', 'created_at', 'updated_at', 'deleted_at'
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
