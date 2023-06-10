<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_email
 * @property int    $co_os
 * @property int    $co_cliente
 * @property int    $ativo
 * @property string $email
 * @property string $senha
 * @property string $nome
 * @property string $ddd
 * @property string $tel
 * @property string $cargo
 */
class CaoOsEmail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_os_email';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_email';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_os', 'email', 'senha', 'nome', 'co_cliente', 'ativo', 'ddd', 'tel', 'cargo'
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
        'co_email' => 'int', 'co_os' => 'int', 'email' => 'string', 'senha' => 'string', 'nome' => 'string', 'co_cliente' => 'int', 'ativo' => 'int', 'ddd' => 'string', 'tel' => 'string', 'cargo' => 'string'
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
