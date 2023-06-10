<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_daily
 * @property int      $co_os
 * @property int      $co_fase
 * @property int      $co_chamado
 * @property int      $co_atividade
 * @property string   $co_usuario
 * @property string   $ds_assunto
 * @property DateTime $data
 * @property boolean  $co_status_atual
 */
class CaoOsDailyReport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os_daily_report';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_daily';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_os', 'co_fase', 'co_usuario', 'ds_assunto', 'tempo_gasto', 'data', 'co_status_atual', 'co_chamado', 'co_atividade'
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
        'co_daily' => 'int', 'co_os' => 'int', 'co_fase' => 'int', 'co_usuario' => 'string', 'ds_assunto' => 'string', 'data' => 'datetime', 'co_status_atual' => 'boolean', 'co_chamado' => 'int', 'co_atividade' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data'
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
