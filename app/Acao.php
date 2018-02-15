<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acao extends Model
{
    use SoftDeletes;

    protected $table = 'acao';

    protected $fillable = ['data', 'horario', 'descricao', 'status', 'oportunidade_id', 'contato_id', 'tipo_id'];

    protected $dates = ['deleted_at'];

    public function oportunidade()
    {
        return $this->belongsTo('App\Oportunidade');
    }

    public function contato()
    {
        return $this->belongsTo('App\Contato');
    }

    public function tipoacao()
    {
        return $this->belongsTo('App\TipoAcao');
    }

    public function relatoriosacao()
    {
        return $this->hasMany('App\RelatorioAcao');
    }

    public function convocacoes()
    {
        return $this->hasMany('App\Convocacoes');
    }
}
