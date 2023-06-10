<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_part_funcionario
 * @property int    $co_escritorio
 * @property float  $pc_participacao
 * @property string $co_usuario
 * @property Date   $dt_referencia
 */
class CaoParticipacaoFuncionario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_participacao_funcionario';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_part_funcionario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pc_participacao', 'co_usuario', 'co_escritorio', 'dt_referencia'
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
        'co_part_funcionario' => 'int', 'pc_participacao' => 'float', 'co_usuario' => 'string', 'co_escritorio' => 'int', 'dt_referencia' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_referencia'
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
