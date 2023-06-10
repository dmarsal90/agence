<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_os
 * @property int    $nu_os
 * @property int    $co_sistema
 * @property int    $co_arquitetura
 * @property int    $co_status
 * @property int    $co_email
 * @property int    $co_os_prospect_rel
 * @property string $co_usuario
 * @property string $ds_os
 * @property string $ds_caracteristica
 * @property string $ds_requisito
 * @property string $diretoria_sol
 * @property string $nu_tel_sol
 * @property string $ddd_tel_sol
 * @property string $nu_tel_sol2
 * @property string $ddd_tel_sol2
 * @property string $usuario_sol
 * @property Date   $dt_inicio
 * @property Date   $dt_fim
 * @property Date   $dt_sol
 * @property Date   $dt_imp
 * @property Date   $dt_garantia
 */
class CaoOs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_os';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nu_os', 'co_sistema', 'co_usuario', 'co_arquitetura', 'ds_os', 'ds_caracteristica', 'ds_requisito', 'dt_inicio', 'dt_fim', 'co_status', 'diretoria_sol', 'dt_sol', 'nu_tel_sol', 'ddd_tel_sol', 'nu_tel_sol2', 'ddd_tel_sol2', 'usuario_sol', 'dt_imp', 'dt_garantia', 'co_email', 'co_os_prospect_rel'
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
        'co_os' => 'int', 'nu_os' => 'int', 'co_sistema' => 'int', 'co_usuario' => 'string', 'co_arquitetura' => 'int', 'ds_os' => 'string', 'ds_caracteristica' => 'string', 'ds_requisito' => 'string', 'dt_inicio' => 'date', 'dt_fim' => 'date', 'co_status' => 'int', 'diretoria_sol' => 'string', 'dt_sol' => 'date', 'nu_tel_sol' => 'string', 'ddd_tel_sol' => 'string', 'nu_tel_sol2' => 'string', 'ddd_tel_sol2' => 'string', 'usuario_sol' => 'string', 'dt_imp' => 'date', 'dt_garantia' => 'date', 'co_email' => 'int', 'co_os_prospect_rel' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_inicio', 'dt_fim', 'dt_sol', 'dt_imp', 'dt_garantia'
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
