<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformacaoTI extends Model
{
    use SoftDeletes;

    protected $table = 'informacaoti';

    protected $fillable = ['nome', 'fornecedor', 'quantidadeLicencas', 'conta_id', 'modelocontracao_id'];

    protected $dates = ['deleted_at'];

    public function conta()
    {
        return $this->belongsTo('App\Conta');
    }

    public function modelocontracao()
    {
        return $this->belongsTo('App\ModeloContratacao');
    }
}
