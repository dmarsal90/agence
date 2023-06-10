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
 * @property int      $town_planning
 * @property int      $more_habitations
 * @property int      $rooms
 * @property int      $bathrooms
 * @property int      $jardin
 * @property int      $gaz
 * @property int      $electrique
 * @property int      $desires_to_sell
 * @property int      $details_state_interior
 * @property int      $details_state_exterior
 * @property int      $surface
 * @property int      $price_client
 * @property int      $terrese
 * @property int      $garage
 * @property int      $estate_id
 * @property int      $rooms
 * @property int      $bathrooms
 * @property int      $gaz
 * @property int      $electrique
 * @property int      $desires_to_sell
 * @property int      $details_state_interior
 * @property int      $details_state_exterior
 * @property int      $surface
 * @property int      $price_client
 * @property int      $terrese
 * @property int      $garage
 * @property string   $description
 * @property string   $comment
 * @property string   $problems
 * @property string   $encode
 * @property string   $adapte
 * @property string   $year_construction
 * @property string   $year_renovation
 * @property string   $coordinate_x
 * @property string   $coordinate_y
 * @property string   $peb
 * @property string   $visit_remarks
 * @property string   $description
 * @property string   $comment
 * @property string   $problems
 * @property string   $encode
 * @property string   $adapte
 * @property string   $year_construction
 * @property string   $year_renovation
 * @property string   $coordinate_x
 * @property string   $coordinate_y
 * @property string   $peb
 * @property string   $price_evaluated
 * @property string   $price_market
 * @property string   $visit_remarks
 * @property string   $seller_name
 * @property string   $seller_phone
 * @property string   $seller_email
 * @property string   $estate_description
 * @property string   $estate_street
 * @property string   $details_commentaire
 * @property string   $interior_state
 * @property string   $exterior_state
 * @property string   $district_state
 * @property string   $interior_highlights
 * @property string   $exterior_highlights
 * @property string   $interior_weak_point
 * @property string   $exterior_weak_point
 * @property string   $agent_notice
 * @property string   $type_estate
 * @property string   $description
 * @property string   $comment
 * @property string   $problems
 * @property string   $encode
 * @property string   $adapte
 * @property string   $year_construction
 * @property string   $year_renovation
 * @property string   $coordinate_x
 * @property string   $coordinate_y
 * @property string   $peb
 * @property string   $price_evaluated
 * @property string   $price_market
 * @property string   $visit_remarks
 * @property string   $seller_name
 * @property string   $seller_phone
 * @property string   $seller_email
 * @property string   $estate_description
 * @property string   $estate_street
 * @property string   $details_commentaire
 * @property string   $interior_state
 * @property string   $exterior_state
 * @property string   $district_state
 * @property string   $interior_highlights
 * @property string   $exterior_highlights
 * @property string   $interior_weak_point
 * @property string   $exterior_weak_point
 * @property string   $agent_notice
 * @property string   $type_estate
 * @property float    $price_evaluated
 * @property float    $price_market
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property DateTime $deleted_at
 * @property boolean  $town_planning
 * @property boolean  $more_habitations
 * @property boolean  $jardin
 * @property boolean  $owner
 */
class EstateDetails extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estate_details';

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
        'estate_id', 'description', 'comment', 'problems', 'encode', 'adapte', 'year_construction', 'year_renovation', 'coordinate_x', 'coordinate_y', 'peb', 'price_evaluated', 'price_market', 'visit_remarks', 'created_at', 'updated_at', 'deleted_at', 'estate_id', 'description', 'comment', 'problems', 'encode', 'adapte', 'year_construction', 'year_renovation', 'coordinate_x', 'coordinate_y', 'peb', 'price_evaluated', 'price_market', 'visit_remarks', 'created_at', 'updated_at', 'deleted_at', 'seller_id', 'seller_name', 'seller_phone', 'seller_email', 'town_planning', 'more_habitations', 'rooms', 'bathrooms', 'estate_description', 'estate_street', 'jardin', 'gaz', 'electrique', 'details_commentaire', 'interior_state', 'exterior_state', 'district_state', 'interior_highlights', 'exterior_highlights', 'interior_weak_point', 'exterior_weak_point', 'desires_to_sell', 'agent_notice', 'details_state_interior', 'details_state_exterior', 'surface', 'price_client', 'terrese', 'garage', 'type_estate', 'estate_id', 'description', 'comment', 'problems', 'encode', 'adapte', 'year_construction', 'year_renovation', 'coordinate_x', 'coordinate_y', 'peb', 'price_evaluated', 'price_market', 'visit_remarks', 'created_at', 'updated_at', 'deleted_at', 'seller_id', 'seller_name', 'seller_phone', 'seller_email', 'town_planning', 'more_habitations', 'rooms', 'bathrooms', 'estate_description', 'estate_street', 'jardin', 'gaz', 'electrique', 'details_commentaire', 'interior_state', 'exterior_state', 'district_state', 'interior_highlights', 'exterior_highlights', 'interior_weak_point', 'exterior_weak_point', 'desires_to_sell', 'agent_notice', 'details_state_interior', 'details_state_exterior', 'surface', 'price_client', 'terrese', 'garage', 'type_estate', 'owner'
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
        'id' => 'int', 'id' => 'int', 'description' => 'string', 'comment' => 'string', 'problems' => 'string', 'encode' => 'string', 'adapte' => 'string', 'year_construction' => 'string', 'year_renovation' => 'string', 'coordinate_x' => 'string', 'coordinate_y' => 'string', 'peb' => 'string', 'price_evaluated' => 'double', 'price_market' => 'double', 'visit_remarks' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'deleted_at' => 'timestamp', 'estate_id' => 'int', 'description' => 'string', 'comment' => 'string', 'problems' => 'string', 'encode' => 'string', 'adapte' => 'string', 'year_construction' => 'string', 'year_renovation' => 'string', 'coordinate_x' => 'string', 'coordinate_y' => 'string', 'peb' => 'string', 'price_evaluated' => 'string', 'price_market' => 'string', 'visit_remarks' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'seller_name' => 'string', 'seller_phone' => 'string', 'seller_email' => 'string', 'town_planning' => 'int', 'more_habitations' => 'int', 'rooms' => 'int', 'bathrooms' => 'int', 'estate_description' => 'string', 'estate_street' => 'string', 'jardin' => 'int', 'gaz' => 'int', 'electrique' => 'int', 'details_commentaire' => 'string', 'interior_state' => 'string', 'exterior_state' => 'string', 'district_state' => 'string', 'interior_highlights' => 'string', 'exterior_highlights' => 'string', 'interior_weak_point' => 'string', 'exterior_weak_point' => 'string', 'desires_to_sell' => 'int', 'agent_notice' => 'string', 'details_state_interior' => 'int', 'details_state_exterior' => 'int', 'surface' => 'int', 'price_client' => 'int', 'terrese' => 'int', 'garage' => 'int', 'type_estate' => 'string', 'estate_id' => 'int', 'description' => 'string', 'comment' => 'string', 'problems' => 'string', 'encode' => 'string', 'adapte' => 'string', 'year_construction' => 'string', 'year_renovation' => 'string', 'coordinate_x' => 'string', 'coordinate_y' => 'string', 'peb' => 'string', 'price_evaluated' => 'string', 'price_market' => 'string', 'visit_remarks' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime', 'seller_name' => 'string', 'seller_phone' => 'string', 'seller_email' => 'string', 'town_planning' => 'boolean', 'more_habitations' => 'boolean', 'rooms' => 'int', 'bathrooms' => 'int', 'estate_description' => 'string', 'estate_street' => 'string', 'jardin' => 'boolean', 'gaz' => 'int', 'electrique' => 'int', 'details_commentaire' => 'string', 'interior_state' => 'string', 'exterior_state' => 'string', 'district_state' => 'string', 'interior_highlights' => 'string', 'exterior_highlights' => 'string', 'interior_weak_point' => 'string', 'exterior_weak_point' => 'string', 'desires_to_sell' => 'int', 'agent_notice' => 'string', 'details_state_interior' => 'int', 'details_state_exterior' => 'int', 'surface' => 'int', 'price_client' => 'int', 'terrese' => 'int', 'garage' => 'int', 'type_estate' => 'string', 'owner' => 'boolean'
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
