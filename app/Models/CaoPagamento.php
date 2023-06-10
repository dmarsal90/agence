<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $co_usuario
 * @property Date   $dt_pagamento
 * @property Date   $dt_referencia_pagamento
 * @property float  $vl_pagamento
 */
class CaoPagamento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_pagamento';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_pagamento';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_usuario', 'tp_pagamento', 'dt_pagamento', 'vl_pagamento', 'dt_referencia_pagamento'
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
        'co_usuario' => 'string', 'dt_pagamento' => 'date', 'vl_pagamento' => 'float', 'dt_referencia_pagamento' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_pagamento', 'dt_referencia_pagamento'
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
