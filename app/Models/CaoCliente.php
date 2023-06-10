<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $co_cliente
 * @property int    $nu_numero
 * @property int    $co_status
 * @property int    $co_complemento_status
 * @property string $no_razao
 * @property string $no_fantasia
 * @property string $no_contato
 * @property string $nu_telefone
 * @property string $nu_ramal
 * @property string $nu_cnpj
 * @property string $ds_endereco
 * @property string $ds_complemento
 * @property string $no_bairro
 * @property string $nu_cep
 * @property string $no_pais
 * @property string $ds_site
 * @property string $ds_email
 * @property string $ds_cargo_contato
 * @property string $ds_referencia
 * @property string $nu_fax
 * @property string $ddd2
 * @property string $telefone2
 */
class CaoCliente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_cliente';

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
        'no_razao', 'no_fantasia', 'no_contato', 'nu_telefone', 'nu_ramal', 'nu_cnpj', 'ds_endereco', 'nu_numero', 'ds_complemento', 'no_bairro', 'nu_cep', 'no_pais', 'co_ramo', 'co_cidade', 'co_status', 'ds_site', 'ds_email', 'ds_cargo_contato', 'tp_cliente', 'ds_referencia', 'co_complemento_status', 'nu_fax', 'ddd2', 'telefone2'
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
        'co_cliente' => 'int', 'no_razao' => 'string', 'no_fantasia' => 'string', 'no_contato' => 'string', 'nu_telefone' => 'string', 'nu_ramal' => 'string', 'nu_cnpj' => 'string', 'ds_endereco' => 'string', 'nu_numero' => 'int', 'ds_complemento' => 'string', 'no_bairro' => 'string', 'nu_cep' => 'string', 'no_pais' => 'string', 'co_status' => 'int', 'ds_site' => 'string', 'ds_email' => 'string', 'ds_cargo_contato' => 'string', 'ds_referencia' => 'string', 'co_complemento_status' => 'int', 'nu_fax' => 'string', 'ddd2' => 'string', 'telefone2' => 'string'
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
