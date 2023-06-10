<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_fatura
 * @property int    $co_cliente
 * @property int    $co_sistema
 * @property int    $co_os
 * @property int    $num_nf
 * @property float  $total
 * @property float  $valor
 * @property float  $comissao_cn
 * @property float  $total_imp_inc
 * @property Date   $data_emissao
 * @property string $corpo_nf
 */
class CaoFatura extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_fatura';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_fatura';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_cliente', 'co_sistema', 'co_os', 'num_nf', 'total', 'valor', 'data_emissao', 'corpo_nf', 'comissao_cn', 'total_imp_inc'
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
        'co_fatura' => 'int', 'co_cliente' => 'int', 'co_sistema' => 'int', 'co_os' => 'int', 'num_nf' => 'int', 'total' => 'float', 'valor' => 'float', 'data_emissao' => 'date', 'corpo_nf' => 'string', 'comissao_cn' => 'float', 'total_imp_inc' => 'float'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data_emissao'
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
