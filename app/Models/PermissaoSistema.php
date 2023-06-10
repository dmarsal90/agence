<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $co_usuario
 * @property string   $co_usuario_atualizacao
 * @property DateTime $dt_atualizacao
 */
class PermissaoSistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissao_sistema';

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
        'co_tipo_usuario', 'co_sistema', 'in_ativo', 'co_usuario_atualizacao', 'dt_atualizacao'
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
        'co_usuario' => 'string', 'co_usuario_atualizacao' => 'string', 'dt_atualizacao' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_atualizacao'
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
