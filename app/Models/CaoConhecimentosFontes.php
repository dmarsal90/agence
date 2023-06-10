<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $idfonte
 * @property int      $idconhecimento
 * @property DateTime $datahora
 * @property string   $arquivo
 * @property string   $caminho
 */
class CaoConhecimentosFontes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_conhecimentos_fontes';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idfonte';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idconhecimento', 'datahora', 'arquivo', 'caminho'
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
        'idfonte' => 'int', 'idconhecimento' => 'int', 'datahora' => 'datetime', 'arquivo' => 'string', 'caminho' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'datahora'
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
