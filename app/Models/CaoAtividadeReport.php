<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $co_cliente
 * @property int      $co_atividade
 * @property int      $co_os
 * @property int      $co_fase
 * @property string   $inicio
 * @property string   $fim
 * @property string   $lembrete
 * @property string   $assunto
 * @property string   $conteudo
 * @property string   $status
 * @property string   $tempo
 * @property string   $co_usuario
 * @property string   $retorno
 * @property DateTime $data_ativ
 */
class CaoAtividadeReport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cao_atividade_report';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_cliente', 'inicio', 'fim', 'lembrete', 'co_atividade', 'co_os', 'assunto', 'conteudo', 'status', 'tempo', 'co_usuario', 'data_ativ', 'retorno', 'co_fase'
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
        'id' => 'int', 'co_cliente' => 'int', 'inicio' => 'string', 'fim' => 'string', 'lembrete' => 'string', 'co_atividade' => 'int', 'co_os' => 'int', 'assunto' => 'string', 'conteudo' => 'string', 'status' => 'string', 'tempo' => 'string', 'co_usuario' => 'string', 'data_ativ' => 'datetime', 'retorno' => 'string', 'co_fase' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'data_ativ'
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
