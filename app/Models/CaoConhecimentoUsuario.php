<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $co_usuario
 * @property boolean $co_conhecimento
 * @property boolean $nv_conhecimento
 * @property boolean $is_certificado
 */
class CaoConhecimentoUsuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_conhecimento_usuario';

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
        'co_conhecimento', 'nv_conhecimento', 'is_certificado'
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
        'co_usuario' => 'string', 'co_conhecimento' => 'boolean', 'nv_conhecimento' => 'boolean', 'is_certificado' => 'boolean'
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
