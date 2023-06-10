<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_banc_horas
 * @property int    $min_mes
 * @property int    $min_ferias
 * @property int    $min_pago
 * @property int    $min_total
 * @property string $co_usuario
 * @property string $periodo
 */
class CaoBancoHoras extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_banco_horas';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_banc_horas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_usuario', 'periodo', 'min_mes', 'min_ferias', 'min_pago', 'min_total'
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
        'co_banc_horas' => 'int', 'co_usuario' => 'string', 'periodo' => 'string', 'min_mes' => 'int', 'min_ferias' => 'int', 'min_pago' => 'int', 'min_total' => 'int'
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
