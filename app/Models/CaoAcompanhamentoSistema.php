<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_acompanhamento
 * @property string $email
 * @property string $senha
 */
class CaoAcompanhamentoSistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_acompanhamento_sistema';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_acompanhamento';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'senha', 'co_sistema', 'status'
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
        'co_acompanhamento' => 'int', 'email' => 'string', 'senha' => 'string'
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
