<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_ativ_comp
 * @property string $co_usuario
 * @property string $assunto
 * @property Date   $data
 */
class CaoDrAtivComp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_dr_ativ_comp';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_ativ_comp';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_usuario', 'data', 'assunto', 'tempo_gasto'
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
        'id_ativ_comp' => 'int', 'co_usuario' => 'string', 'data' => 'date', 'assunto' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data'
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
