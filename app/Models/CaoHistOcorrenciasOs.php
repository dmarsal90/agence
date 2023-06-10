<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $idocorrencia
 * @property int      $co_os
 * @property string   $co_usuario
 * @property string   $descricao
 * @property string   $responsavel
 * @property DateTime $data
 * @property DateTime $data_fechamento
 */
class CaoHistOcorrenciasOs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_hist_ocorrencias_os';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idocorrencia';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_os', 'co_usuario', 'data', 'tipo', 'descricao', 'responsavel', 'data_fechamento'
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
        'idocorrencia' => 'int', 'co_os' => 'int', 'co_usuario' => 'string', 'data' => 'datetime', 'descricao' => 'string', 'responsavel' => 'string', 'data_fechamento' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data', 'data_fechamento'
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
