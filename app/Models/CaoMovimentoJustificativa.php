<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ds_justificativa
 */
class CaoMovimentoJustificativa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_movimento_justificativa';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_movimento_justificativa';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_movimento', 'nu_os', 'ds_justificativa'
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
        'ds_justificativa' => 'string'
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
