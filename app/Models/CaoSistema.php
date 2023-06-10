<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_sistema
 * @property int    $co_cliente
 * @property int    $co_arquitetura
 * @property int    $co_email
 * @property string $co_usuario
 * @property string $no_sistema
 * @property string $ds_sistema_resumo
 * @property string $ds_caracteristica
 * @property string $ds_requisito
 * @property string $no_diretoria_solic
 * @property string $ddd_telefone_solic
 * @property string $nu_telefone_solic
 * @property string $no_usuario_solic
 * @property Date   $dt_solicitacao
 * @property Date   $dt_entrega
 */
class CaoSistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_sistema';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_sistema';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_cliente', 'co_usuario', 'co_arquitetura', 'no_sistema', 'ds_sistema_resumo', 'ds_caracteristica', 'ds_requisito', 'no_diretoria_solic', 'ddd_telefone_solic', 'nu_telefone_solic', 'no_usuario_solic', 'dt_solicitacao', 'dt_entrega', 'co_email'
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
        'co_sistema' => 'int', 'co_cliente' => 'int', 'co_usuario' => 'string', 'co_arquitetura' => 'int', 'no_sistema' => 'string', 'ds_sistema_resumo' => 'string', 'ds_caracteristica' => 'string', 'ds_requisito' => 'string', 'no_diretoria_solic' => 'string', 'ddd_telefone_solic' => 'string', 'nu_telefone_solic' => 'string', 'no_usuario_solic' => 'string', 'dt_solicitacao' => 'date', 'dt_entrega' => 'date', 'co_email' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_solicitacao', 'dt_entrega'
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
