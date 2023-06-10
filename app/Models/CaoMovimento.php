<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $co_usuario
 * @property DateTime $dt_entrada
 * @property DateTime $dt_saida_almoco
 * @property DateTime $dt_volta_almoco
 * @property DateTime $dt_saida
 * @property boolean  $is_encerrado
 */
class CaoMovimento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_movimento';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_movimento';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_usuario', 'dt_entrada', 'dt_saida_almoco', 'dt_volta_almoco', 'dt_saida', 'is_encerrado'
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
        'co_usuario' => 'string', 'dt_entrada' => 'datetime', 'dt_saida_almoco' => 'datetime', 'dt_volta_almoco' => 'datetime', 'dt_saida' => 'datetime', 'is_encerrado' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_entrada', 'dt_saida_almoco', 'dt_volta_almoco', 'dt_saida'
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
