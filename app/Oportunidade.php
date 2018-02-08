<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    use SoftDeletes;

    protected $table = 'oportunidade';

    protected $fillable = ['nome', 'valor', 'dataAbertura', 'dataFechamento', 'comentario', 'status', 'probabilidadeGanho', 'conta_id', 'fasevenda_id'];

    protected $dates = ['deleted_at'];

    public function conta()
    {
        return $this->belongsTo('App\Conta');
    }

    public function fasevenda()
    {
        return $this->belongsTo('App\FaseVenda');
    }

    public function acoes()
    {
        return $this->hasMany('App\Acao');
    }
}
