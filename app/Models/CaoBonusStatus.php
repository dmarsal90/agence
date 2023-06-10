<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $co_usuario
 * @property string $mes
 * @property string $valor
 * @property string $is_solic
 * @property string $is_pg
 * @property string $is_horas
 * @property Date   $data_solic
 */
class CaoBonusStatus extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_bonus_status';

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
        'co_usuario', 'data_solic', 'mes', 'valor', 'is_solic', 'is_pg', 'is_horas'
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
        'id' => 'int', 'co_usuario' => 'string', 'data_solic' => 'date', 'mes' => 'string', 'valor' => 'string', 'is_solic' => 'string', 'is_pg' => 'string', 'is_horas' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data_solic'
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
