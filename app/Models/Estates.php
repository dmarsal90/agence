<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id
 * @property int      $reference
 * @property int      $number
 * @property int      $box
 * @property int      $code_postal
 * @property int      $created_at
 * @property int      $updated_at
 * @property int      $deleted_at
 * @property int      $category
 * @property int      $number
 * @property int      $box
 * @property int      $code_postal
 * @property int      $seller
 * @property int      $agent
 * @property int      $notary
 * @property int      $attempt_via_agency
 * @property int      $attempt_via_client
 * @property int      $module_visit
 * @property int      $send_reminder_half_past_eight
 * @property int      $rdv
 * @property int      $surface
 * @property int      $garden
 * @property int      $terrase
 * @property int      $garage
 * @property int      $town_planning
 * @property int      $more_habitations
 * @property int      $number_bathroom
 * @property int      $number_rooms
 * @property int      $number_gas
 * @property int      $number_electric
 * @property int      $state_interior
 * @property int      $state_exterior
 * @property int      $rooms
 * @property int      $bathrooms
 * @property int      $category
 * @property int      $number
 * @property int      $box
 * @property int      $code_postal
 * @property int      $seller
 * @property int      $agent
 * @property int      $notary
 * @property int      $attempt_via_agency
 * @property int      $attempt_via_client
 * @property int      $module_visit
 * @property int      $send_reminder_half_past_eight
 * @property int      $rdv
 * @property int      $surface
 * @property int      $number_bathroom
 * @property int      $number_rooms
 * @property int      $number_gas
 * @property int      $number_electric
 * @property int      $state_interior
 * @property int      $state_exterior
 * @property int      $rooms
 * @property int      $bathrooms
 * @property string   $name
 * @property string   $type_estate
 * @property string   $visit_date_at
 * @property string   $main_photo
 * @property string   $street
 * @property string   $city
 * @property string   $when_want_sell
 * @property string   $want_tenant_after_sell
 * @property string   $want_buy_wesold
 * @property string   $type_of_sale
 * @property string   $agency_name
 * @property string   $date_of_sale_agence
 * @property string   $date_of_sale_himself
 * @property string   $information_additional
 * @property string   $date_send_reminder
 * @property string   $name
 * @property string   $type_estate
 * @property string   $visit_date_at
 * @property string   $main_photo
 * @property string   $street
 * @property string   $city
 * @property string   $when_want_sell
 * @property string   $want_tenant_after_sell
 * @property string   $want_buy_wesold
 * @property string   $type_of_sale
 * @property string   $agency_name
 * @property string   $date_of_sale_agence
 * @property string   $date_of_sale_himself
 * @property string   $information_additional
 * @property string   $date_send_reminder
 * @property string   $peb
 * @property string   $name
 * @property string   $type_estate
 * @property string   $visit_date_at
 * @property string   $main_photo
 * @property string   $street
 * @property string   $city
 * @property string   $when_want_sell
 * @property string   $want_tenant_after_sell
 * @property string   $want_buy_wesold
 * @property string   $type_of_sale
 * @property string   $agency_name
 * @property string   $date_of_sale_agence
 * @property string   $date_of_sale_himself
 * @property string   $information_additional
 * @property string   $date_send_reminder
 * @property string   $images
 * @property string   $docs
 * @property string   $peb
 * @property string   $problems
 * @property float    $estimate
 * @property float    $market
 * @property float    $price_published_agence
 * @property float    $price_published_himself
 * @property float    $estimate
 * @property float    $market
 * @property float    $price_published_agence
 * @property float    $price_published_himself
 * @property float    $coordinate_x
 * @property float    $coordinate_y
 * @property float    $estimate
 * @property float    $market
 * @property float    $price_published_agence
 * @property float    $price_published_himself
 * @property float    $coordinate_x
 * @property float    $coordinate_y
 * @property boolean  $attempt_via_agency
 * @property boolean  $attempt_via_client
 * @property boolean  $module_visit
 * @property boolean  $send_reminder_half_past_eight
 * @property boolean  $rdv
 * @property boolean  $garden
 * @property boolean  $terrase
 * @property boolean  $garage
 * @property boolean  $town_planning
 * @property boolean  $more_habitations
 * @property boolean  $owner
 * @property DateTime $reference
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $reference
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 */
class Estates extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estates';

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
        'reference', 'name', 'type_estate', 'category', 'visit_date_at', 'main_photo', 'street', 'number', 'box', 'code_postal', 'city', 'seller', 'when_want_sell', 'want_tenant_after_sell', 'want_buy_wesold', 'agent', 'notary', 'estimate', 'market', 'type_of_sale', 'attempt_via_agency', 'attempt_via_client', 'agency_name', 'price_published_agence', 'date_of_sale_agence', 'price_published_himself', 'date_of_sale_himself', 'information_additional', 'module_visit', 'date_send_reminder', 'send_reminder_half_past_eight', 'rdv', 'created_at', 'updated_at', 'deleted_at', 'reference', 'name', 'type_estate', 'category', 'visit_date_at', 'main_photo', 'street', 'number', 'box', 'code_postal', 'city', 'seller', 'when_want_sell', 'want_tenant_after_sell', 'want_buy_wesold', 'agent', 'notary', 'estimate', 'market', 'type_of_sale', 'attempt_via_agency', 'attempt_via_client', 'agency_name', 'price_published_agence', 'date_of_sale_agence', 'price_published_himself', 'date_of_sale_himself', 'information_additional', 'module_visit', 'date_send_reminder', 'send_reminder_half_past_eight', 'rdv', 'created_at', 'updated_at', 'deleted_at', 'surface', 'garden', 'terrase', 'garage', 'town_planning', 'more_habitations', 'number_bathroom', 'number_rooms', 'number_gas', 'number_electric', 'state_interior', 'state_exterior', 'construction', 'renovation', 'peb', 'coordinate_x', 'coordinate_y', 'rooms', 'bathrooms', 'reference', 'name', 'type_estate', 'category', 'visit_date_at', 'main_photo', 'street', 'number', 'box', 'code_postal', 'city', 'seller', 'when_want_sell', 'want_tenant_after_sell', 'want_buy_wesold', 'agent', 'notary', 'estimate', 'market', 'type_of_sale', 'attempt_via_agency', 'attempt_via_client', 'agency_name', 'price_published_agence', 'date_of_sale_agence', 'price_published_himself', 'date_of_sale_himself', 'information_additional', 'module_visit', 'date_send_reminder', 'send_reminder_half_past_eight', 'rdv', 'created_at', 'updated_at', 'images', 'docs', 'deleted_at', 'surface', 'garden', 'terrase', 'garage', 'town_planning', 'more_habitations', 'number_bathroom', 'number_rooms', 'number_gas', 'number_electric', 'state_interior', 'state_exterior', 'construction', 'renovation', 'peb', 'coordinate_x', 'coordinate_y', 'rooms', 'bathrooms', 'owner', 'problems'
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
        'id' => 'int', 'id' => 'int', 'reference' => 'timestamp', 'name' => 'string', 'type_estate' => 'string', 'visit_date_at' => 'string', 'main_photo' => 'string', 'street' => 'string', 'number' => 'int', 'box' => 'int', 'code_postal' => 'int', 'city' => 'string', 'when_want_sell' => 'string', 'want_tenant_after_sell' => 'string', 'want_buy_wesold' => 'string', 'estimate' => 'double', 'market' => 'double', 'type_of_sale' => 'string', 'attempt_via_agency' => 'boolean', 'attempt_via_client' => 'boolean', 'agency_name' => 'string', 'price_published_agence' => 'double', 'date_of_sale_agence' => 'string', 'price_published_himself' => 'double', 'date_of_sale_himself' => 'string', 'information_additional' => 'string', 'module_visit' => 'boolean', 'date_send_reminder' => 'string', 'send_reminder_half_past_eight' => 'boolean', 'rdv' => 'boolean', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'reference' => 'datetime', 'name' => 'string', 'type_estate' => 'string', 'category' => 'int', 'visit_date_at' => 'string', 'main_photo' => 'string', 'street' => 'string', 'number' => 'int', 'box' => 'int', 'code_postal' => 'int', 'city' => 'string', 'seller' => 'int', 'when_want_sell' => 'string', 'want_tenant_after_sell' => 'string', 'want_buy_wesold' => 'string', 'agent' => 'int', 'notary' => 'int', 'estimate' => 'float', 'market' => 'float', 'type_of_sale' => 'string', 'attempt_via_agency' => 'int', 'attempt_via_client' => 'int', 'agency_name' => 'string', 'price_published_agence' => 'float', 'date_of_sale_agence' => 'string', 'price_published_himself' => 'float', 'date_of_sale_himself' => 'string', 'information_additional' => 'string', 'module_visit' => 'int', 'date_send_reminder' => 'string', 'send_reminder_half_past_eight' => 'int', 'rdv' => 'int', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'surface' => 'int', 'garden' => 'int', 'terrase' => 'int', 'garage' => 'int', 'town_planning' => 'int', 'more_habitations' => 'int', 'number_bathroom' => 'int', 'number_rooms' => 'int', 'number_gas' => 'int', 'number_electric' => 'int', 'state_interior' => 'int', 'state_exterior' => 'int', 'peb' => 'string', 'coordinate_x' => 'double', 'coordinate_y' => 'double', 'rooms' => 'int', 'bathrooms' => 'int', 'reference' => 'datetime', 'name' => 'string', 'type_estate' => 'string', 'category' => 'int', 'visit_date_at' => 'string', 'main_photo' => 'string', 'street' => 'string', 'number' => 'int', 'box' => 'int', 'code_postal' => 'int', 'city' => 'string', 'seller' => 'int', 'when_want_sell' => 'string', 'want_tenant_after_sell' => 'string', 'want_buy_wesold' => 'string', 'agent' => 'int', 'notary' => 'int', 'estimate' => 'float', 'market' => 'float', 'type_of_sale' => 'string', 'attempt_via_agency' => 'int', 'attempt_via_client' => 'int', 'agency_name' => 'string', 'price_published_agence' => 'float', 'date_of_sale_agence' => 'string', 'price_published_himself' => 'float', 'date_of_sale_himself' => 'string', 'information_additional' => 'string', 'module_visit' => 'int', 'date_send_reminder' => 'string', 'send_reminder_half_past_eight' => 'int', 'rdv' => 'int', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'images' => 'string', 'docs' => 'string', 'deleted_at' => 'datetime', 'surface' => 'int', 'garden' => 'boolean', 'terrase' => 'boolean', 'garage' => 'boolean', 'town_planning' => 'boolean', 'more_habitations' => 'boolean', 'number_bathroom' => 'int', 'number_rooms' => 'int', 'number_gas' => 'int', 'number_electric' => 'int', 'state_interior' => 'int', 'state_exterior' => 'int', 'peb' => 'string', 'coordinate_x' => 'double', 'coordinate_y' => 'double', 'rooms' => 'int', 'bathrooms' => 'int', 'owner' => 'boolean', 'problems' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'reference', 'created_at', 'updated_at', 'deleted_at', 'reference', 'created_at', 'updated_at', 'deleted_at', 'reference', 'created_at', 'updated_at', 'deleted_at'
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
