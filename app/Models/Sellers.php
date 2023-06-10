<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $deleted_at
 * @property int      $phone
 * @property int      $want_stay_tenant
 * @property int      $want_stay_tenant
 * @property string   $name
 * @property string   $email
 * @property string   $type
 * @property string   $contact_by
 * @property string   $reason_sale
 * @property string   $looking_property
 * @property string   $when_to_buy
 * @property string   $name
 * @property string   $email
 * @property string   $type
 * @property string   $contact_by
 * @property string   $reason_sale
 * @property string   $looking_property
 * @property string   $when_to_buy
 * @property string   $name
 * @property string   $email
 * @property string   $type
 * @property string   $contact_by
 * @property string   $reason_sale
 * @property string   $looking_property
 * @property string   $when_to_buy
 * @property boolean  $want_stay_tenant
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class Sellers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sellers';

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
        'name', 'email', 'phone', 'type', 'contact_by', 'reason_sale', 'looking_property', 'want_stay_tenant', 'when_to_buy', 'created_at', 'updated_at', 'deleted_at', 'name', 'email', 'phone', 'type', 'contact_by', 'reason_sale', 'looking_property', 'want_stay_tenant', 'when_to_buy', 'created_at', 'updated_at', 'deleted_at', 'name', 'email', 'phone', 'type', 'contact_by', 'reason_sale', 'looking_property', 'want_stay_tenant', 'when_to_buy', 'created_at', 'updated_at', 'deleted_at'
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
        'id' => 'int', 'id' => 'int', 'name' => 'string', 'email' => 'string', 'type' => 'string', 'contact_by' => 'string', 'reason_sale' => 'string', 'looking_property' => 'string', 'want_stay_tenant' => 'boolean', 'when_to_buy' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'name' => 'string', 'email' => 'string', 'phone' => 'int', 'type' => 'string', 'contact_by' => 'string', 'reason_sale' => 'string', 'looking_property' => 'string', 'want_stay_tenant' => 'int', 'when_to_buy' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'name' => 'string', 'email' => 'string', 'type' => 'string', 'contact_by' => 'string', 'reason_sale' => 'string', 'looking_property' => 'string', 'want_stay_tenant' => 'int', 'when_to_buy' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at', 'created_at', 'updated_at', 'deleted_at'
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
