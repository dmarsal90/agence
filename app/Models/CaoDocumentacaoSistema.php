<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $co_sistema
 * @property int      $sub_grupo
 * @property string   $descricao
 * @property string   $pasta
 * @property string   $co_usuario
 * @property string   $arquivo
 * @property DateTime $dt_doc
 */
class CaoDocumentacaoSistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_documentacao_sistema';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_sistema', 'descricao', 'pasta', 'sub_grupo', 'co_usuario', 'dt_doc', 'arquivo'
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
        'id' => 'int', 'co_sistema' => 'int', 'descricao' => 'string', 'pasta' => 'string', 'sub_grupo' => 'int', 'co_usuario' => 'string', 'dt_doc' => 'datetime', 'arquivo' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_doc'
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
