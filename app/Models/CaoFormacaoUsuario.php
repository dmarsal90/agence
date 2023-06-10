<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $co_usuario
 * @property string $tp_curso
 * @property string $ds_curso
 * @property string $ds_instituicao
 * @property Date   $dt_conclusao
 */
class CaoFormacaoUsuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_formacao_usuario';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_usuario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tp_curso', 'ds_curso', 'ds_instituicao', 'dt_conclusao'
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
        'co_usuario' => 'string', 'tp_curso' => 'string', 'ds_curso' => 'string', 'ds_instituicao' => 'string', 'dt_conclusao' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_conclusao'
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
