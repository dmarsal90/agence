<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_diary_report
 * @property int    $co_atividade
 * @property string $ds_assunto
 */
class CaoDiaryReport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_diary_report';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_diary_report';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hr_gasta', 'co_atividade', 'ds_assunto', 'co_movimento', 'nu_os', 'co_sistema'
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
        'co_diary_report' => 'int', 'co_atividade' => 'int', 'ds_assunto' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
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
