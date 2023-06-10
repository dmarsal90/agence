<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_motivo
 * @property string $ds_motivo
 */
class CaoHelpMotivoChamado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_help_motivo_chamado';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_motivo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ds_motivo'
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
        'co_motivo' => 'int', 'ds_motivo' => 'string'
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