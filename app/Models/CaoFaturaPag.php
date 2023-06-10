<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int   $id_fatura_pag
 * @property int   $co_fatura
 * @property Date  $dt_efetuado
 * @property float $valor_pago
 */
class CaoFaturaPag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_fatura_pag';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_fatura_pag';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_fatura', 'dt_efetuado', 'valor_pago'
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
        'id_fatura_pag' => 'int', 'co_fatura' => 'int', 'dt_efetuado' => 'date', 'valor_pago' => 'float'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_efetuado'
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
