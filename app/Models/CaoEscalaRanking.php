<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idescala
 * @property int $qtd_visual
 * @property int $pontuacao
 */
class CaoEscalaRanking extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_escala_ranking';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idescala';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qtd_visual', 'pontuacao'
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
        'idescala' => 'int', 'qtd_visual' => 'int', 'pontuacao' => 'int'
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
