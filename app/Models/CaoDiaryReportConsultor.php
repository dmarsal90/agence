<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_diary_report_consultor
 * @property int      $co_movimento
 * @property int      $co_atividade
 * @property string   $ds_empresa
 * @property string   $ds_assunto
 * @property DateTime $dt_agendamento
 * @property DateTime $dt_agendamento_fim
 * @property float    $vl_fechamento
 */
class CaoDiaryReportConsultor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_diary_report_consultor';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_diary_report_consultor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_movimento', 'co_atividade', 'ds_empresa', 'ds_assunto', 'dt_agendamento', 'dt_agendamento_fim', 'vl_fechamento', 'co_cliente'
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
        'co_diary_report_consultor' => 'int', 'co_movimento' => 'int', 'co_atividade' => 'int', 'ds_empresa' => 'string', 'ds_assunto' => 'string', 'dt_agendamento' => 'datetime', 'dt_agendamento_fim' => 'datetime', 'vl_fechamento' => 'float'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_agendamento', 'dt_agendamento_fim'
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
