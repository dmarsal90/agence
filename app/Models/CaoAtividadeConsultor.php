<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_atividade
 * @property string $ds_atividade
 */
class CaoAtividadeConsultor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_atividade_consultor';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_atividade';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ds_atividade', 'ativo'
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
        'co_atividade' => 'int', 'ds_atividade' => 'string'
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
