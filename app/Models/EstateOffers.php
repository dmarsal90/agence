<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $deleted_at
 * @property int      $estate_id
 * @property int      $estate_id
 * @property float    $price_seller
 * @property float    $price_wesold
 * @property float    $price_market
 * @property float    $price_seller
 * @property float    $price_wesold
 * @property float    $price_market
 * @property string   $other_offer
 * @property string   $notaire
 * @property string   $condition
 * @property string   $validity
 * @property string   $textadded
 * @property string   $pdf
 * @property string   $other_offer
 * @property string   $notaire
 * @property string   $condition
 * @property string   $validity
 * @property string   $textadded
 * @property string   $pdf
 * @property string   $offer_temp
 * @property string   $price_seller
 * @property string   $price_wesold
 * @property string   $price_market
 * @property string   $other_offer
 * @property string   $notaire
 * @property string   $condition
 * @property string   $validity
 * @property string   $textadded
 * @property string   $pdf
 * @property string   $offer_temp
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class EstateOffers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_offers';

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
        'estate_id', 'price_seller', 'price_wesold', 'price_market', 'other_offer', 'notaire', 'condition', 'validity', 'textadded', 'pdf', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'price_seller', 'price_wesold', 'price_market', 'other_offer', 'notaire', 'condition', 'validity', 'textadded', 'pdf', 'created_at', 'updated_at', 'deleted_at', 'offer_temp', 'estate_id', 'price_seller', 'price_wesold', 'price_market', 'other_offer', 'notaire', 'condition', 'validity', 'textadded', 'pdf', 'created_at', 'updated_at', 'deleted_at', 'offer_temp'
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
        'id' => 'int', 'id' => 'int', 'price_seller' => 'double', 'price_wesold' => 'double', 'price_market' => 'double', 'other_offer' => 'string', 'notaire' => 'string', 'condition' => 'string', 'validity' => 'string', 'textadded' => 'string', 'pdf' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'estate_id' => 'int', 'price_seller' => 'float', 'price_wesold' => 'float', 'price_market' => 'float', 'other_offer' => 'string', 'notaire' => 'string', 'condition' => 'string', 'validity' => 'string', 'textadded' => 'string', 'pdf' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'offer_temp' => 'string', 'estate_id' => 'int', 'price_seller' => 'string', 'price_wesold' => 'string', 'price_market' => 'string', 'other_offer' => 'string', 'notaire' => 'string', 'condition' => 'string', 'validity' => 'string', 'textadded' => 'string', 'pdf' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'offer_temp' => 'string'
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
