<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_autor
 * @property int    $co_filial
 * @property string $no_autor
 * @property string $nu_ddd1
 * @property string $nu_tel1
 * @property string $nu_ramal1
 * @property string $nu_ddd2
 * @property string $nu_tel2
 * @property string $nu_ramal2
 * @property string $ds_email
 * @property string $ds_funcao
 */
class CaoHelpAutor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_help_autor';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_autor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_autor', 'co_filial', 'nu_ddd1', 'nu_tel1', 'nu_ramal1', 'nu_ddd2', 'nu_tel2', 'nu_ramal2', 'ds_email', 'ds_funcao'
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
        'co_autor' => 'int', 'no_autor' => 'string', 'co_filial' => 'int', 'nu_ddd1' => 'string', 'nu_tel1' => 'string', 'nu_ramal1' => 'string', 'nu_ddd2' => 'string', 'nu_tel2' => 'string', 'nu_ramal2' => 'string', 'ds_email' => 'string', 'ds_funcao' => 'string'
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
