<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int   $bon_categoria
 * @property int   $bon_inicio
 * @property int   $bon_fim
 * @property float $bon_valor_sem
 * @property float $bon_valor_fimsem
 */
class CaoBonus extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_bonus';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'bon_categoria';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bon_inicio', 'bon_fim', 'bon_valor_sem', 'bon_valor_fimsem'
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
        'bon_categoria' => 'int', 'bon_inicio' => 'int', 'bon_fim' => 'int', 'bon_valor_sem' => 'float', 'bon_valor_fimsem' => 'float'
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
