<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $co_cliente
 * @property Date    $dt_contato
 * @property boolean $fg_agendado
 */
class CaoClienteContato extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_cliente_contato';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_cliente';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dt_contato', 'fg_agendado', 'hr_ini', 'hr_end'
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
        'co_cliente' => 'int', 'dt_contato' => 'date', 'fg_agendado' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_contato'
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
