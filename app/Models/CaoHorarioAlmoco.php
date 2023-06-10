<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $co_usuario
 * @property string $almoco_saida_hora
 * @property string $almoco_volta_hora
 */
class CaoHorarioAlmoco extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_horario_almoco';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_usuario', 'almoco_saida_hora', 'almoco_volta_hora'
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
        'co_usuario' => 'string', 'almoco_saida_hora' => 'string', 'almoco_volta_hora' => 'string'
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
