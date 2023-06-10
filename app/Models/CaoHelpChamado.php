<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_chamado
 * @property int    $co_status
 * @property int    $co_motivo
 * @property int    $co_tela
 * @property int    $co_autor
 * @property int    $co_filial
 * @property string $ds_chamado
 * @property string $ds_solucao
 * @property Date   $dt_chamado
 * @property Date   $dt_solucao
 */
class CaoHelpChamado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_help_chamado';

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
        'ds_chamado', 'ds_solucao', 'co_status', 'co_motivo', 'co_tela', 'co_autor', 'co_filial', 'co_sistema', 'dt_chamado', 'dt_solucao'
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
        'co_chamado' => 'int', 'ds_chamado' => 'string', 'ds_solucao' => 'string', 'co_status' => 'int', 'co_motivo' => 'int', 'co_tela' => 'int', 'co_autor' => 'int', 'co_filial' => 'int', 'dt_chamado' => 'date', 'dt_solucao' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_chamado', 'dt_solucao'
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
