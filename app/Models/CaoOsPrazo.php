<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $co_prazo
 * @property int $co_os
 * @property int $co_fase
 * @property int $total_analista
 * @property int $total_hora
 */
class CaoOsPrazo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os_prazo';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_prazo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_os', 'co_fase', 'total_analista', 'total_hora'
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
        'co_prazo' => 'int', 'co_os' => 'int', 'co_fase' => 'int', 'total_analista' => 'int', 'total_hora' => 'int'
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
