<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int  $co_comissao
 * @property int  $co_fatura
 * @property Date $dt_efetuado
 */
class CaoComissao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_comissao';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_comissao';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_fatura', 'dt_efetuado'
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
        'co_comissao' => 'int', 'co_fatura' => 'int', 'dt_efetuado' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_efetuado'
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
