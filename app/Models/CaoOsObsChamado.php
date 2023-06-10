<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_obs
 * @property int      $co_chamado
 * @property string   $co_usuario
 * @property string   $descricao
 * @property string   $email
 * @property string   $arquivo_obs
 * @property DateTime $dt_obs
 */
class CaoOsObsChamado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os_obs_chamado';

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
        'co_chamado', 'co_usuario', 'descricao', 'dt_obs', 'email', 'arquivo_obs'
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
        'co_obs' => 'int', 'co_chamado' => 'int', 'co_usuario' => 'string', 'descricao' => 'string', 'dt_obs' => 'datetime', 'email' => 'string', 'arquivo_obs' => 'string'
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
