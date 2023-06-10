<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property DateTime $dt_hr_inicio
 * @property DateTime $dt_hr_fim
 */
class CaoAgendamento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_agendamento';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_agendamento';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dt_hr_inicio', 'dt_hr_fim', 'co_status_agendamento', 'co_diary_report_consultor', 'co_complemento'
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
        'dt_hr_inicio' => 'datetime', 'dt_hr_fim' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_hr_inicio', 'dt_hr_fim'
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
