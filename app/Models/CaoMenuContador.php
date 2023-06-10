<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $co_usuario
 * @property int     $co_menu
 * @property int     $nu_pontos
 * @property boolean $in_processado
 */
class CaoMenuContador extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_menu_contador';

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
        'co_menu', 'nu_pontos', 'in_processado'
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
        'co_usuario' => 'string', 'co_menu' => 'int', 'nu_pontos' => 'int', 'in_processado' => 'boolean'
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
