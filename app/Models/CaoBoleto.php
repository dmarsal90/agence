<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_boleto
 * @property int    $co_cliente
 * @property int    $co_sistema
 * @property int    $co_os
 * @property int    $status
 * @property string $valor
 * @property string $vencimento
 * @property string $boleto
 * @property string $linha_dig
 * @property string $parcela
 */
class CaoBoleto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_boleto';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_boleto';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_cliente', 'co_sistema', 'co_os', 'valor', 'vencimento', 'status', 'boleto', 'linha_dig', 'parcela'
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
        'co_boleto' => 'int', 'co_cliente' => 'int', 'co_sistema' => 'int', 'co_os' => 'int', 'valor' => 'string', 'vencimento' => 'string', 'status' => 'int', 'boleto' => 'string', 'linha_dig' => 'string', 'parcela' => 'string'
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
