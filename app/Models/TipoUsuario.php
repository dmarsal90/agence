<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ds_tipo_usuario
 */
class TipoUsuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipo_usuario';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_tipo_usuario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_sistema', 'ds_tipo_usuario'
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
        'ds_tipo_usuario' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
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
