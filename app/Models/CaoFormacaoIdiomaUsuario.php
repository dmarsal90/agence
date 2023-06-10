<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $co_usuario
 * @property boolean $co_idioma
 * @property boolean $nv_leitura
 * @property boolean $nv_escrita
 * @property boolean $nv_fala
 */
class CaoFormacaoIdiomaUsuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_formacao_idioma_usuario';

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
        'co_idioma', 'nv_leitura', 'nv_escrita', 'nv_fala'
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
        'co_usuario' => 'string', 'co_idioma' => 'boolean', 'nv_leitura' => 'boolean', 'nv_escrita' => 'boolean', 'nv_fala' => 'boolean'
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
