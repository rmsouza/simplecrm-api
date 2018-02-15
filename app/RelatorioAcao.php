<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelatorioAcao extends Model
{
    use SoftDeletes;

    protected $table = 'relatorioacao';

    protected $fillable = ['descricao', 'dataCadastro', 'acao_id'];

    protected $dates = ['deleted_at'];

    public function acao()
    {
        return $this->belongsTo('App\Acao');
    }
}
