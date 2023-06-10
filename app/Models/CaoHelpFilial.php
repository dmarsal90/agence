<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_filial
 * @property int    $co_cliente
 * @property string $no_filial
 */
class CaoHelpFilial extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_help_filial';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_filial';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_filial', 'co_cliente', 'estado'
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
        'co_filial' => 'int', 'no_filial' => 'string', 'co_cliente' => 'int'
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
