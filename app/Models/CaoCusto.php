<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $co_tipo_custo
 * @property int     $co_escritorio
 * @property string  $descricao
 * @property string  $co_boleto
 * @property string  $parcela
 * @property Date    $dt_compra
 * @property Date    $dt_pagamento
 * @property float   $valor
 * @property boolean $pag
 */
class CaoCusto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_custo';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_custo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_tipo_custo', 'descricao', 'co_escritorio', 'dt_compra', 'dt_pagamento', 'co_boleto', 'valor', 'parcela', 'pag', 'co_custo_high'
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
        'co_tipo_custo' => 'int', 'descricao' => 'string', 'co_escritorio' => 'int', 'dt_compra' => 'date', 'dt_pagamento' => 'date', 'co_boleto' => 'string', 'valor' => 'float', 'parcela' => 'string', 'pag' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_compra', 'dt_pagamento'
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
