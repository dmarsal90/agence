<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $co_noticia
 * @property string   $assunto
 * @property string   $descricao
 * @property string   $foto
 * @property string   $co_usuario
 * @property DateTime $dt_noticia
 */
class CaoNoticia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_noticia';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_noticia';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'assunto', 'descricao', 'foto', 'co_usuario', 'dt_noticia'
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
        'co_noticia' => 'int', 'assunto' => 'string', 'descricao' => 'string', 'foto' => 'string', 'co_usuario' => 'string', 'dt_noticia' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_noticia'
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
