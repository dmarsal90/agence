<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_chamado
 * @property int      $co_sistema
 * @property int      $co_os
 * @property int      $co_tipo
 * @property int      $co_prioridade
 * @property int      $co_item
 * @property int      $status
 * @property string   $ds_chamado
 * @property string   $descricao
 * @property string   $ds_solucao
 * @property string   $tempo
 * @property string   $co_usuario
 * @property string   $co_analista
 * @property string   $email
 * @property DateTime $dt_chamado
 */
class CaoOsChamado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os_chamado';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_chamado';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_sistema', 'co_os', 'ds_chamado', 'co_tipo', 'co_prioridade', 'co_item', 'descricao', 'ds_solucao', 'tempo', 'dt_chamado', 'status', 'co_usuario', 'co_analista', 'email'
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
        'co_chamado' => 'int', 'co_sistema' => 'int', 'co_os' => 'int', 'ds_chamado' => 'string', 'co_tipo' => 'int', 'co_prioridade' => 'int', 'co_item' => 'int', 'descricao' => 'string', 'ds_solucao' => 'string', 'tempo' => 'string', 'dt_chamado' => 'datetime', 'status' => 'int', 'co_usuario' => 'string', 'co_analista' => 'string', 'email' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_chamado'
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
