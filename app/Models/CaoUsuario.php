<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $co_usuario
 * @property string   $no_usuario
 * @property string   $ds_senha
 * @property string   $co_usuario_autorizacao
 * @property string   $nu_cpf
 * @property string   $nu_rg
 * @property string   $no_orgao_emissor
 * @property string   $uf_orgao_emissor
 * @property string   $ds_endereco
 * @property string   $no_email
 * @property string   $no_email_pessoal
 * @property string   $nu_telefone
 * @property string   $url_foto
 * @property string   $instant_messenger
 * @property string   $msn
 * @property string   $yms
 * @property string   $ds_comp_end
 * @property string   $ds_bairro
 * @property string   $nu_cep
 * @property string   $no_cidade
 * @property string   $uf_cidade
 * @property Date     $dt_nascimento
 * @property Date     $dt_admissao_empresa
 * @property Date     $dt_desligamento
 * @property Date     $dt_expiracao
 * @property Date     $dt_expedicao
 * @property DateTime $dt_inclusao
 * @property DateTime $dt_alteracao
 * @property int      $icq
 */
class CaoUsuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_usuario';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'co_usuario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_usuario', 'ds_senha', 'co_usuario_autorizacao', 'nu_matricula', 'dt_nascimento', 'dt_admissao_empresa', 'dt_desligamento', 'dt_inclusao', 'dt_expiracao', 'nu_cpf', 'nu_rg', 'no_orgao_emissor', 'uf_orgao_emissor', 'ds_endereco', 'no_email', 'no_email_pessoal', 'nu_telefone', 'dt_alteracao', 'url_foto', 'instant_messenger', 'icq', 'msn', 'yms', 'ds_comp_end', 'ds_bairro', 'nu_cep', 'no_cidade', 'uf_cidade', 'dt_expedicao'
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
        'co_usuario' => 'string', 'no_usuario' => 'string', 'ds_senha' => 'string', 'co_usuario_autorizacao' => 'string', 'dt_nascimento' => 'date', 'dt_admissao_empresa' => 'date', 'dt_desligamento' => 'date', 'dt_inclusao' => 'datetime', 'dt_expiracao' => 'date', 'nu_cpf' => 'string', 'nu_rg' => 'string', 'no_orgao_emissor' => 'string', 'uf_orgao_emissor' => 'string', 'ds_endereco' => 'string', 'no_email' => 'string', 'no_email_pessoal' => 'string', 'nu_telefone' => 'string', 'dt_alteracao' => 'datetime', 'url_foto' => 'string', 'instant_messenger' => 'string', 'icq' => 'int', 'msn' => 'string', 'yms' => 'string', 'ds_comp_end' => 'string', 'ds_bairro' => 'string', 'nu_cep' => 'string', 'no_cidade' => 'string', 'uf_cidade' => 'string', 'dt_expedicao' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dt_nascimento', 'dt_admissao_empresa', 'dt_desligamento', 'dt_inclusao', 'dt_expiracao', 'dt_alteracao', 'dt_expedicao'
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
