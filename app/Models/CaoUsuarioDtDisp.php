<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_dt_disp
 * @property string $co_usuario
 * @property Date   $dt_disp
 * @property Date   $dt_alt
 */
class CaoUsuarioDtDisp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_usuario_dt_disp';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_dt_disp';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_usuario', 'dt_disp', 'dt_alt'
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
        'co_dt_disp' => 'int', 'co_usuario' => 'string', 'dt_disp' => 'date', 'dt_alt' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_disp', 'dt_alt'
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
