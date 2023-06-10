<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $co_usuario
 * @property string $observacao
 * @property Date   $dt_efetuado
 * @property int    $id_pagamento
 */
class CaoSalarioPag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_salario_pag';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_usuario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dt_efetuado', 'id_pagamento', 'status', 'observacao'
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
        'co_usuario' => 'string', 'dt_efetuado' => 'date', 'id_pagamento' => 'int', 'observacao' => 'string'
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
