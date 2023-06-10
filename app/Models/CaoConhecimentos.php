<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $idconhecimento
 * @property string   $assunto
 * @property string   $conhecimento
 * @property string   $url
 * @property string   $tags
 * @property string   $usuario
 * @property DateTime $datahora
 */
class CaoConhecimentos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_conhecimentos';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idconhecimento';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'assunto', 'conhecimento', 'url', 'tags', 'usuario', 'datahora'
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
        'idconhecimento' => 'int', 'assunto' => 'string', 'conhecimento' => 'string', 'url' => 'string', 'tags' => 'string', 'usuario' => 'string', 'datahora' => 'datetime'
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
