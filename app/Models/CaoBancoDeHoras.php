<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $segundos
 * @property string $co_usuario
 * @property string $tipo
 * @property Date   $data_cadastro
 */
class CaoBancoDeHoras extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_banco_de_horas';

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
        'co_usuario', 'data_cadastro', 'segundos', 'tipo'
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
        'id' => 'int', 'co_usuario' => 'string', 'data_cadastro' => 'date', 'segundos' => 'int', 'tipo' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data_cadastro'
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
