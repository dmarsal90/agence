<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $co_fase
 * @property string  $descricao
 * @property string  $descricao_ingl
 * @property boolean $ordem
 */
class CaoOsFase extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os_fase';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_fase';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'descricao_ingl', 'ordem'
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
        'co_fase' => 'int', 'descricao' => 'string', 'descricao_ingl' => 'string', 'ordem' => 'boolean'
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
