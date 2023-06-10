<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_obs
 * @property string   $descricao
 * @property string   $co_usuario
 * @property DateTime $dt_obs
 */
class CaoSistemaObs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_sistema_obs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_obs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'co_sistema', 'co_usuario', 'dt_obs'
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
        'co_obs' => 'int', 'descricao' => 'string', 'co_usuario' => 'string', 'dt_obs' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_obs'
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
