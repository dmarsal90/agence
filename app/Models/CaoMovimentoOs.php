<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_movimento_os
 * @property int      $nu_os
 * @property string   $ds_valor
 * @property string   $usuario_obs
 * @property DateTime $dt_ini
 * @property DateTime $dt_fim
 */
class CaoMovimentoOs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_movimento_os';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_movimento_os';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nu_os', 'co_sistema', 'co_tipo_movimento', 'nu_valor', 'ds_valor', 'usuario_obs', 'dt_ini', 'dt_fim'
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
        'co_movimento_os' => 'int', 'nu_os' => 'int', 'ds_valor' => 'string', 'usuario_obs' => 'string', 'dt_ini' => 'datetime', 'dt_fim' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_ini', 'dt_fim'
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
