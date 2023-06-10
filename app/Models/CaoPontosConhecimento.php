<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $idpontos
 * @property int    $pontuacao
 * @property int    $idconhecimento
 * @property string $co_coordenador
 */
class CaoPontosConhecimento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_pontos_conhecimento';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idpontos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pontuacao', 'co_coordenador', 'idconhecimento'
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
        'idpontos' => 'int', 'pontuacao' => 'int', 'co_coordenador' => 'string', 'idconhecimento' => 'int'
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
